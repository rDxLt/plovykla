<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function soon()
    {
        return view('pages.soon');
    }

    public function subscribe(CreateSubscriberRequest $request)
    {
        $data = $request->validated();
        Subscriber::create($data);

        return Redirect::back()->with('message', 'Sėkmingai užsiprenumeravote');
    }
}
