<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use \App\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slider::all();
        //$other_variable = 'other_var_value';
        //['xslides' => $slides,'other_variable'=>$other_variable]
        //return view('portal.index', compact('slides','other_variable'));
        return view('portal.index', compact('slides'));
    }

    public function about()
    {
        return view('portal.about');
    }
}
