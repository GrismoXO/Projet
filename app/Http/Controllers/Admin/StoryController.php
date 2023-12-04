<?php

namespace App\Http\Controllers\Admin;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StoryController extends Controller
{
    public function index() {
        $carousels = Carousel::latest()->get();
        return view('story', [
            'carousels' => $carousels,
        ]);
    }
}
