<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class AdminController extends Controller
{
    public function index()
    {
        $layout = Question::all();
        //dd($layout);
        return view('layout.dashboard',['layout'=> $layout]);
    }
    public function login()
    {
        return view('login');
    }
}
