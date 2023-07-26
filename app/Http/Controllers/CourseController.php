<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Price;
use App\Models\Schedule;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$courses = Course::all();
        $courses = Course::orderByDesc('created_at')->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.create');
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
            'title' => 'required',
            'description' => 'nullable',
            'duration' => 'nullable',
            'cost' => 'required',
            'subscription_type' => 'nullable',
            'startzeit' => 'required',
            'endzeit' => 'required',
        ]);

        $course = Course::create($data);
        // Создание записей в связанных таблицах
        $price = new Price(['cost' => $request->input('cost'), 'subscription_type' => $request->input('subscription_type')]);
        $course->prices()->save($price);

        $schedule = new Schedule(['start_time' => $request->input('startzeit'), 'end_time' => $request->input('endzeit')]);
        $course->schedules()->save($schedule);

        return redirect()->route('courses.index')->with('success', 'Eintrag erfolgreich hinzugefügt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.courses.edit', compact('course'));
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
        $course = Course::find($id);
        $course->title = $request->input('title');
        $course->description = $request->input('description');
        $course->duration = $request->input('duration');
       
        
        
        $price = $course->prices->first();
        $price->subscription_type = $request->input('subscription_type');
        $price->cost = $request->input('cost');
        $price->save();

        $schedule = $course->schedules->first();
        $schedule->start_time = $request->input('startzeit');
        $schedule->end_time = $request->input('endzeit');
        $schedule->save();
       
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Datensatz erfolgreich aktualisiert');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

       
            //все связанные таблицы
        $prices = $course->prices;
        $enrollments = $course->enrollments;
        $schedules = $course->schedules;
        $subscriptions = $course->subscriptions;
       // dd($subscriptions);

            //удаляем все записи привязанные к courses

        foreach ($subscriptions as $subscription) {
            $subscription->delete();
        }

        foreach ($prices as $price) {
            $price->delete();
        }

        foreach ($enrollments as $enrollment) {
            $enrollment->delete();
        }

        foreach ($schedules as $schedule) {
             $schedule->delete();
        }
 
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Eintrag erfolgreich gelöscht');
    }
}
