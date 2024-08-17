<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function responseToTheBlade(Request $request)
    {
        $requestData = $request->all();

        return view('test/welcome', compact('requestData'));
    }
}
