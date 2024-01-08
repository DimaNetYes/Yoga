<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;



class CookieController extends Controller
{

    public function setCookie(Request $request){

        $cookieConsent = $request->input('cookieConsent');

        
        // install cookie
        return response()->json(['success' => true])->cookie(
            'cookieConsent',
            $cookieConsent,
            365 * 24 * 60 * 60,
            '/',
            config('session.domain')
        );


    }
    



}
