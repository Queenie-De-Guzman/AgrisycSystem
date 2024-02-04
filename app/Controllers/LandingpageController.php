<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LandingpageController extends BaseController
{
    public function index()
    {
        return view('landing_page_inc/index');
    }

    
    public function Contact()
    {
        return view('landing_page_inc/Contact');
    }
    public function About()
    {
        return view('landing_page_inc/About');
    }
}
