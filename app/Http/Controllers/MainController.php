<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
         // Add any necessary data that you want to pass to the view
         $data = [];

        return view('main', $data);
    }
}
