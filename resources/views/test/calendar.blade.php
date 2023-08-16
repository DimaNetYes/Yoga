<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    
        .calendar {
        text-align: center;
        margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        .day {
            font-weight: bold;
        }

        .event {
            background-color: #f2f2f2;
            padding: 2px;
        }

</style>

<script>
     $(document).ready(function() {
        $('a[href="{{ route('calendar.prev') }}"], a[href="{{ route('calendar.next') }}"]').on('click', function(e) {
            e.preventDefault();
            $.get($(this).attr('href'), function(data) {
                $('.calendar').html(data);
                console.log('sadf');
            });
        });
    });
</script>
</head>
<body>
<div class="calendar">
    <h1>My Calendar</h1>
    <div>
         <a href="{{ route('calendar.prev') }}">Previous Month</a>
         <a href="{{ route('calendar.next') }}">Next Month</a>
    </div>
    @foreach ($calendarData as $monthData)
    <h2>{{ $monthData['month'] }}</h2>
    <table>
        <thead>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
        </thead>
        <tbody>
            @php
                $week = 1;
                $currentDayOfWeek = $monthData['days'][0]['date']->dayOfWeek;
                
            @endphp
           
            <tr>
                            <!-- create empty td if month started not in monday -->
                @for ($i = 0; $i < $currentDayOfWeek; $i++)
                    <td></td>
                @endfor

                @foreach ($monthData['days'] as $dayData)
                    <td>
                        <span class="day">{{ $dayData['date']->day }}</span>
                        @foreach ($dayData['events'] as $event)
                            <div class="event">{{ $event->name }}</div>
                        @endforeach
                    </td>

                    @php
                        $currentDayOfWeek++;
                        if ($currentDayOfWeek === 7) {
                            $currentDayOfWeek = 0;
                            echo '</tr>';
                            if ($week < count($monthData['days']) / 7) {
                                $week++;
                                echo '<tr>';
                            }
                        }
                    @endphp
                @endforeach

                @for ($i = $currentDayOfWeek; $i < 7; $i++)
                    <td></td>
                @endfor
            </tr>
        </tbody>
    </table>
@endforeach

</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/fullcalendar.min.js"></script>

<script>
   


    $(document).ready(function() {
        $('#calendar').fullCalendar({
            events: {!! json_encode($events) !!},
            // Другие настройки календаря
        });
    });
</script>


</body>
</html>
