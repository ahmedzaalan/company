<?php

namespace App\Http\Controllers;

use App\Category;
use App\ClientOpinion;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use \App\Slider;
use \App\Project;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slider::all();
        $latest_projects = Project::all()->sortByDesc('updated_at')->take(4);
        $latest_opinions = ClientOpinion::where('show_in_main', '1')->get()->sortByDesc('updated_at')->take(4);

        $categories = Category::all()->sortByDesc('updated_at')->take(4);

        //$other_variable = 'other_var_value';
        //['xslides' => $slides,'other_variable'=>$other_variable]
        //return view('portal.index', compact('slides','other_variable'));
        return view('portal.index', compact('slides', 'latest_projects', 'latest_opinions', 'categories'));
    }

    public function category_courses(Category $category)
    {
        $courses = $category->courses()->get();
      // dd($courses );
        return view('portal.category_courses', compact('courses'));
    }

    public function about()
    {
        return view('portal.about');
    }
}
