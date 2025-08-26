<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function info(): string
    {
        return view('info');
    }

    public function blog(): string
    {
        return view('blog');
    }
    
    public function tech(): string
    {
        return view('tech');
    }

    public function exp(): string
    {
        return view('exp');
    }
}
