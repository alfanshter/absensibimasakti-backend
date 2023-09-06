<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('home.home');
    }

    function about() {
        return view('home.about');
    }

    function product() {
        return view('home.product');
    }
    function project() {
        return view('home.project');
    }
    function contact() {
        return view('home.contact');
    }
    function service() {
        return view('home.service');
    }


}
