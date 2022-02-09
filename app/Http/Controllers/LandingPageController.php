<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function getRequest(Request $request) {
        $response = Http::post('http://localhost:4000/v1/account/demo', [
            'name' => $request->nama,
            'company' => $request->perusahaan,
            'email' => $request->email,
            'detail' => $request->deskripsi,
        ]);
        if ($response["status"] == 'success') {
            return redirect()->route('registration', ['status' => 'success']);
        } else {
            return redirect()->route('registration', ['status' => 'fail']);
        }
    }
}