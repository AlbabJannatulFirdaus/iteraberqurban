<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function About()
    {
        return view('pages/about');
    }
}
