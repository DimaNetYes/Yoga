<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        // Ваша логика для отображения формы создания новости
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        // Ваша логика для сохранения новости
        $validatedData = $request->validate([
            'title' => 'required|max:191',
            'content' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image_url')) {

            $image = $request->file('image_url');
            
             $imageName =   $image->getClientOriginalName();
             
            $image->move(public_path('img'), $imageName);

            $validatedData['image_url'] = '/img/' . $imageName;
        }

        // Преобразование новых строк в HTML-теги <br>
        $validatedData['content'] = nl2br($validatedData['content']);

        $news = new News($validatedData);
        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'Новость успешно создана!');
    }

    public function edit($id)
    {
        // Ваша логика для отображения формы редактирования новости
        $news = News::findOrFail($id);
        $imageUrl = $news->image_url ? $news->image_url : "Keine BILDER";
        
        return view('admin.news.edit', compact('news', 'imageUrl'));
    }

    public function update(Request $request, $id)
    {

        
        // Ваша логика для обновления новости
        $news = News::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|max:191',
            'content' => 'required',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        
         // Проверяем, был ли загружен новый файл
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url');
            
            $imageName =   $image->getClientOriginalName();
            
           $image->move(public_path('img'), $imageName);

           $validatedData['image_url'] = '/img/' . $imageName;
        }else {
            
            $validatedData['image_url'] = $news->image_url;
        }

         // Преобразование новых строк в HTML-теги <br>
         $validatedData['content'] = nl2br($validatedData['content']);

        $news->update($validatedData);
        return redirect()->route('admin.news.index')->with('success', 'Die News wurden erfolgreich aktualisiert.');

    }

    public function destroy($id)
    {
        // Ваша логика для удаления новости
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Die News wurden erfolgreich aktualisiert.');
    }
}
