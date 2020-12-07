<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\slider;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function homeData(){
        /**
         * SRP Violation, HomeData should either fetch data or display it
         * OCP Violation, Controller is a high-level component and its internals should be
         * encapsulated inside a repository class
         * Dependency Injection of Models to reuse them and Optimize performance
         */
        $sliders = slider::get();

        $aboutUs = about::first();

        return view('dashboard.index', compact('sliders', 'aboutUs'));
    }
}
