<?php

namespace App\Http\Controllers;

use App\Category;
use App\ClientOpinion;
use App\ContactUs;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use \App\Slider;
use \App\Project;
use \App\Employee;
use \App\NewsSubscriber;
use \App\settings;


class HomeController extends Controller
{
    public function index()
    {
        $slides = Slider::all();
        $latest_projects = Project::all()->sortByDesc('updated_at')->take(4);
        $latest_opinions = ClientOpinion::where('show_in_main', '1')->get()->sortByDesc('updated_at')->take(4);

        $categories = Category::all()->sortByDesc('updated_at')->take(4);
        $employees = Employee::all()->take(5);
        $settings=settings::all();

        //$other_variable = 'other_var_value';
        //['xslides' => $slides,'other_variable'=>$other_variable]
        //return view('portal.index', compact('slides','other_variable'));
        return view('portal.index', compact('employees','slides', 'latest_projects', 'latest_opinions', 'categories','settings'));
    }

    public function subscribe(){

        $data = new NewsSubscriber();
        $data->email = request()->email;
        $data->save();
        ///////////////////////////////////////////
        //NewsSubscriber::create(request()->all());
        //-----------------------------------
        session()->flash('msg', 'you have successfully subscribed to our news letter , enjoy!');
        $email_data = '';//['today_date'=>date('d/m/y')];
        \Mail::to(request()->email)->
            send(new \App\Mail\CreateNewSubscriber($email_data));
        return redirect('/message');
    }

    public function category_courses(Category $category)
    {
        $courses = $category->courses()->get();
      // dd($courses );
        return view('portal.category_courses', compact('courses'));
    }

    public function contact_us(Request $request)
    {
        session()->flash('msg', 'We have successfully received you letter, and will contact you soon!');

        //request()==$request
        $valedated =  request()->validate([
            'Username' => ['required'],
            'Email' => ['required'],
            'Cellphone' => ['required'],
            'Message' => ['required','max:255']
        ]);

        ContactUs::create($valedated);
        return redirect('/message');
    }

    public function about()
    {
        return view('portal.about');
    }
}
