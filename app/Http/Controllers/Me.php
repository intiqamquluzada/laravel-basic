<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Me extends Controller
{
    function test($value)
    {
        return view('index', ['name' => $value]);
    }
}
