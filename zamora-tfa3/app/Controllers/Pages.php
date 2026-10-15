<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home', ['title' => 'POS Dashboard']);
    }

    public function about()
    {
        return view('about', ['title' => 'About | POS']);
    }
}
