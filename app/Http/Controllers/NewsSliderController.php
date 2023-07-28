<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsSliderController extends Controller
{
    public function index()
    {
        $newsArticles = News::latest()->get();
    }
}
