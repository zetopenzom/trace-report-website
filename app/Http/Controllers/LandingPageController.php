<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function getRequest(Request $request) {
        return $request->nama;
    }
}
