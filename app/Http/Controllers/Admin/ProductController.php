<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('shop', [
            'products' => Product::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image',
            'alt' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);
        
        $validated = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image->store('products'),
            'alt' => $request->alt,
            'price' => $request->price,
            'stock' => $request->stock,
        ];

        $request->user()->products()->create($validated);    
        return redirect(route('dashboard'))->with('success', 'Le produit a été ajouter dans la boutique.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {   
        $products = Product::inRandomOrder()->take(4)->get();
        return view('products.product', compact('product', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ];
        if ($request->has("image")) {
            // On ajoute la règle de validation pour "picture"
            $rules["image"] = 'required|image';
        }

        $this->validate($request, $rules);

        if ($request->has("picture")) {


            Storage::delete($product->picture);

            $chemin_image = $request->picture->store("products");
        }
        
        $product->update([
            "title" => $request->title,
            "description" => $request->description,
            "image" => isset($chemin_image) ? $chemin_image : $product->image,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        return redirect()->route('products.product', $product)->with('success', 'Le produit a bien été mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse
    {
        // On supprime l'image existant
           Storage::delete($product->image);

           // On les informations du $post de la table "posts"
           $product->delete();
   
           return redirect()->route('shop')->with('success', 'Le produit a bien été suprimer de la boutique.'); 
    }
}
