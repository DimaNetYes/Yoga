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
    @for ($week = 0; $week < $weeksInMonth; $week++)
        <tr>
            @for ($dayOfWeek = 0; $dayOfWeek < 7; $dayOfWeek++)
                <td>
                    @if (isset($calendarData['days'][$week][$dayOfWeek]))
                        @php
                            $dayData = $calendarData['days'][$week][$dayOfWeek];
                        @endphp

                        <span class="day">{{ $dayData['date']->day }}</span>
                        @foreach ($dayData['events'] as $event)
                            <div class="event">{{ $event->name }}</div>
                        @endforeach
                    @endif
                </td>
            @endfor
        </tr>
    @endfor
</table>
