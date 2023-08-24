@extends('layouts.calendar')
@section('content')





<div class="card">
    <div class="card-header">
        {{ trans('global.systemCalendar') }}
    </div>

    <div class="card-body">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>


    </div>
</div>
@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/de.js"></script> <!-- Немецкая локаль -->
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
             //$events = {!! json_encode($events) !!};
             //console.log($events[0].start);
            $('#calendar').fullCalendar({
                locale: 'de', 
                // put your options and callbacks here
                events: {!! json_encode($events) !!},
                timeFormat: 'HH:mm',      //ОТВЕЧАЕТ ЗА ОТОБРАЖЕНИЕ ВРЕМЕНИ fullCalendar
        eventRender: function(event, element) {

            element.css('pointer-events', 'none');  //Предотвращаю нажатие на событие для пользователя

            // Prevent default click behavior on the anchor tag
            element.find('.fc-title a').click(function(e) {
                e.preventDefault();
            });
        }
                


            })
        });
</script>
@stop