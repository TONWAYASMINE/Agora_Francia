<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderitemController extends Controller
{
    public function cart()
    {
        return view('orderitem');
    }
}
