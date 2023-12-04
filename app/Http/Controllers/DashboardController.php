<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (Auth::check()) {
        $user = Auth::user();
        $address = optional($user->addresses)->first();

        if ($address) {
            $street = $address->street;
            $city = $address->city;
            $country = $address->country;
        } 

        return view('dashboard', ['user' => $user, 'address' => $address]);
    } else {
        
        return redirect()->route('login');
    }
}
    
}
