<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|numeric',
            'country' => 'required|string|max:255',
        ]);

        $address = $request->user()->addresses()->create($validated);

        if ($address) {
            return redirect()->route('dashboard')->with('success', 'Votre adresse a bien été ajoutée.');
        } else {
        return redirect()->back()->withInput()->with('error', 'Une erreur s\'est produite lors de la création de l\'adresse.');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {

        return view('addresses.edit', compact('address'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $validated = $request->validate([
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|numeric',
            'country' => 'required|string|max:255',
        ]);
    
        $address->update($validated);
    
        return redirect()->route('dashboard')->with('success', 'Votre adresse a bien été mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}
