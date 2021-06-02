<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {
       return view('signature');
    }

    public function upload()
    {
        return redirect()->route('signature.index');
    }
}
