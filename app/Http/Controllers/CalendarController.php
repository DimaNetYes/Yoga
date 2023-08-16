<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;

use Illuminate\Http\Request;

class CalendarController extends Controller
{

    //Рабочий код который отрисовывает 12 месяцев календаря
   /* public function showCalendar()
    {
        $today = Carbon::today();
       
        $currentYear = $today->year;
        $calendarData = [];

        for ($month = 1; $month <= 12; $month++) {
            $firstDayOfMonth = Carbon::createFromDate($currentYear, $month, 1);
            $daysInMonth = $firstDayOfMonth->daysInMonth;


            

            $monthData = [
                'month' => $firstDayOfMonth->format('F Y'),
                'days' => []
            ];

            for ($day = 1; $day <= $daysInMonth; $day++) {
                $date = $firstDayOfMonth->copy()->addDays($day - 1);
                $events = Event::whereDate('start_time', $date)->get();

               
                $monthData['days'][] = [
                    'date' => $date,
                    'events' => $events
                ];
            }

            $calendarData[] = $monthData;
            
        }
       
       
        return view('test.calendar', ['calendarData' => $calendarData, 'events' => $events]);
    }*/

    public function showCalendar()
    {
        $currentDate = Carbon::today();
        $calendarData = $this->generateCalendarData($currentDate);

        return view('test.calendar', compact('calendarData'));
    }

    public function showNextMonth(Request $request)
    {
        $currentDate = Carbon::parse($request->input('date'))->addMonth();
        $calendarData = $this->generateCalendarData($currentDate);

        return view('test.calendar-month', compact('calendarData'));
    }

    public function showPreviousMonth(Request $request)
    {
        $currentDate = Carbon::parse($request->input('date'))->subMonth();
        $calendarData = $this->generateCalendarData($currentDate);

        return view('test.calendar-month', compact('calendarData'));
    }

    private function generateCalendarData($date)
    {
        // Ваш код для генерации данных календаря
    }



}
