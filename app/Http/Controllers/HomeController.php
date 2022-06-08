<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function soon()
    {
        return view('pages.soon');
    }

    public function subscribe(Request $request)
    {
        dd($request->all());
    }
}
