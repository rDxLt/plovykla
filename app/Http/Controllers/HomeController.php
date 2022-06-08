<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscriberRequest;

class HomeController extends Controller
{
    public function soon()
    {
        return view('pages.soon');
    }

    public function subscribe(CreateSubscriberRequest $request)
    {
        dd($request->validated());
    }
}
