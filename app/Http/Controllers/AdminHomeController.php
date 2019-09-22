<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin_panel.index');
    }
    public function Starter()
    {
        return view('admin_panel.Starter');
    }
}
