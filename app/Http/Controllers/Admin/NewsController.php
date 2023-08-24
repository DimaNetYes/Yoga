<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {


        return view('admin.news.index');
    }

    public function create()
    {
        // Ваша логика для отображения формы создания новости
    }

    public function store(Request $request)
    {
        // Ваша логика для сохранения новости
    }

    public function edit($id)
    {
        // Ваша логика для отображения формы редактирования новости
    }

    public function update(Request $request, $id)
    {
        // Ваша логика для обновления новости
    }

    public function destroy($id)
    {
        // Ваша логика для удаления новости
    }
}
