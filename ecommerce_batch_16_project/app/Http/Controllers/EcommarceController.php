<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommarceController extends Controller
{
    public function index()
    {
        return view("frontEnd.home.home");
    }
}
