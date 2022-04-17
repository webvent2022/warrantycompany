<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function __construct(){}

    public function getHomePage(){

        return view('frontend.homepage.default');
    }
}
