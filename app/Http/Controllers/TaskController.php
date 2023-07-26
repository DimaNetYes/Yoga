<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $tasks = Task::all();
        dd($tasks);    
    }
}
