<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $cart = collect(Session::get('cart', []));
        $total = $cart->sum(function ($item) {
            return $item['quantity'] * $item['price'];
        });
        $tva = $total * 0.196;
        $totalCart = $total + $tva;
        return view('products.cart', [
            'carts' => $cart,
            'total' => $total,
            'tva' => $tva,
            'totalCart' => $totalCart
        ]);

    }

    public function addCart($id, Request $request) : RedirectResponse 
    {
        $product = Product::findOrFail($id);
        $cart = Session::get('cart', []);
        $quantity = $request->input('quantity_cart', 1);
        
            $cart[$id] = [
                    'id' => $product->id,
                    'title' => $product->title,
                    'image' => $product->image,
                    'content' => $product->content,
                    'price' => $product->price,
                    'alt' => $product->alt,
                    'quantity' => $quantity,
                ];
  
        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Votre article été ajouté');
    }


    public function destroy($id)
    {   
        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session(['cart' => $cart]);
            return redirect()->route('products.cart')->with('success', 'Produit supprimé du panier.');
        }
        return redirect()->route('products.cart')->with('error', 'L\'article n\'a pas pu être trouvé dans le panier.');
                
    }

    public function increment($id)
    {
        $cart = Session::get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
            session(['cart' => $cart]);
        }
        return redirect()->route('products.cart');
    }

    public function decrement($id)
    {
        $cart = Session::get('cart', []);
        if (isset($cart[$id]) && $cart[$id]['quantity']) {
            $cart[$id]['quantity'] -= 1;
            if ($cart[$id]['quantity'] === 0) {
                unset($cart[$id]);
            }
            session(['cart' => $cart]);
        }
        return redirect()->route('products.cart');
    }
   
}
