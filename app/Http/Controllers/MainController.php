<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $newsArticles = News::latest()->get();
         // Add any necessary data that you want to pass to the view
         $data = [
            'newsArticles' => $newsArticles,
            ];

        return view('main', $data);
    }
}
