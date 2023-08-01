<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function showMap()
    {
        $apiKey = env('GOOGLE_MAPS_API_KEY');
        return view('map', compact('apiKey'));
    }
}
