<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function strukturkss()
    {
        return view('pages.strukturkss');
    }
    public function kss()
    {
        return view('pages.kss');
    }
    public function msg()
    {
        return view('pages.msg');
    }
    public function smi()
    {
        return view('pages.smi');
    }
    public function sbi()
    {
        return view('pages.sbi');
    }
    public function contact()
    {
        return view('pages.contact');
    }
}
