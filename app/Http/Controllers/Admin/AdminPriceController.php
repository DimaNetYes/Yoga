<?php

namespace App\Http\Controllers\Admin;

use App\Models\Price;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;

  class AdminPriceController extends Controller
{

    public $title = 'Die Kosten für den Unterricht';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::orderBydesc('created_at')->get();
        
        return view('admin.prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $course = Course::latest()->first()->id;
        $request->merge(['course_id' => $course]);
        
       
        // Проверка и валидация данных oder $data = $request->validate([...]) and Price::create($data);
         $request->validate([
            'subscription' => 'required|string',
            'cost' => 'required|numeric',
            'title' => 'nullable|string',
            'punkt1' => 'nullable|string',
            'punkt2' => 'nullable|string',
            'punkt3' => 'nullable|string',
            
        ]);
        // Создание новой цены
        $price = new Price([
            'course_id' => $course,
            'subscription_type' => $request->input('subscription'),
            'cost' => $request->input('cost'),
            'title' => $request->input('title'),
            'punkt1' => $request->input('punkt1'),
            'punkt2' => $request->input('punkt2'),
            'punkt3' => $request->input('punkt3'),
            
        ]);
        

        $price->save();

        //Price::create($data);

        return redirect()->route('admin.prices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $price = Price::find($id);
        
        return view('admin.prices.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $price = Price::find($id);
        
        $price->subscription_type = $request->input('subscription');
        $price->cost = $request->input('cost');
        $price->title = $request->input('title');
        $price->punkt1 = $request->input('punkt1');
        $price->punkt2 = $request->input('punkt2');
        $price->punkt3 = $request->input('punkt3');
        
        $price->save();

        return redirect()->route('admin.prices.index')->with('success', 'Запись успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Price::findOrFail($id);

            //все связанные таблицы
       /* if($price->subscription){
            $price->subscription->delete();
       } */
 
        $price->delete();

        return redirect()->route('admin.prices.index')->with('success', 'Eintrag erfolgreich gelöscht');
    }
}

