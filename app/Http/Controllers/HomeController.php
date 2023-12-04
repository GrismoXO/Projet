<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $carousels = Carousel::latest()->get();
        return view('home', [
            'carousels' => $carousels,
        ]);

    }
}
