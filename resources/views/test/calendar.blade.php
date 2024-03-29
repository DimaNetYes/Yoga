@extends('layouts.admin')
@section('content')


    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.events.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.event.title_singular') }}
            </a>
        </div>
    </div>

<h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
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
<script>
    $(document).ready(function () {
            // page is now ready, initialize the calendar...
             //$events = {!! json_encode($events) !!};
             //console.log($events[0].start);
            $('#calendar').fullCalendar({
                
                // put your options and callbacks here
                events: {!! json_encode($events) !!},
                timeFormat: 'HH:mm',      //ОТВЕЧАЕТ ЗА ОТОБРАЖЕНИЕ ВРЕМЕНИ fullCalendar
                displayEventTime: false, // Скрыть время начала события в заголовке события
        eventRender: function(event, element) {

            // Prevent default click behavior on the anchor tag
            element.find('.fc-title a').click(function(e) {
                e.preventDefault();
            });

            // Показывать начало и конец события внутри элемента
            var startTime = moment(event.start).format('HH:mm');
            var endTime = moment(event.end).format('HH:mm');
            var timeHtml = '<div class="event-time"><span class="bold-time" style="font-size: 1em; font-weight:bold;">' + startTime + ' - ' + endTime + '</span> ' + event.title + '</div>';

            // Предотвращение дублирования заголовка события
            element.find('.fc-title').css('display', 'none');

             element.find('.fc-content').append(timeHtml);

        }
                


            })
        });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/de.js"></script> <!-- Немецкая локаль -->
@stop