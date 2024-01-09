<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    public $title = 'YOGA IM ATELIER';

    public function show(){
        $title = $this->title;
        return view('info.info', compact('title'));
    }
}
