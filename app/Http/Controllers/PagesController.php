<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view('home');
    }

    function contact() {
        return view('contact');
    }

    function contactPost(Request $request) {
        dump($request->email);
        dd($request->all());

    }
}
