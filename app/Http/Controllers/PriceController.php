<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Collection as SupportCollection;


class PriceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
              
        ]);

        Price::create($data);

        return redirect()->route('prices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $price = Price::find(23);
        

        $title = $this->title;
        

        return view('prices.price', compact('title', 'price'));
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
        
        $price->save();

        return redirect()->route('prices.index')->with('success', 'Запись успешно обновлена');
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
       if($price->subscription){
            $price->subscription->delete();
       }
 
        $price->delete();

        return redirect()->route('prices.index')->with('success', 'Eintrag erfolgreich gelöscht');
    }
}
