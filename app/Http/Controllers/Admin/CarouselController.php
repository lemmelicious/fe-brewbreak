<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class CarouselController extends Controller
{
    public function index ()
    {
       $sliders = Slider::all();
        return view('homepage.homepage.includes.carousel', ['sliders' => $sliders]);
    }
}
