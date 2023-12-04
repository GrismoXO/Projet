<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{

    public function index()
    {
        return view('carousels.create', [
            'carousels' => Carousel::with('user')->latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'alt' => 'required|string|max:255',
        ]);
        $validated = [
            'title' => $request->title,
            'image' => $request->image->store('image'),
            'alt' => $request->alt
        ];
        $request->user()->carousels()->create($validated);
        return redirect()->back()->with('success', 'L\'images a bien été ajouté au carrousel !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        $carousels = Carousel::all();
        return view('carousels.show', compact('carousels'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        $carousels = Carousel::all();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        Storage::delete($carousel->image);

        // On les informations du $post de la table "posts"
        $carousel->delete();

        return redirect()->route('carousels.show')->with('success', 'Produit supprimé du panier.');
    }
}
