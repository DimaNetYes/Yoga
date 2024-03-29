<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Gate;
use App\Providers\RouteServiceProvider;

use Symfony\Component\HttpFoundation\Response;

class EventsController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::withCount('events')
            ->get();

        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        //abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        
        Event::create($request->all());

        return redirect()->route('admin.systemCalendar');
    }

    public function edit(Event $event)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->load('event')
            ->loadCount('events');

        return view('admin.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        
        $event->update($request->all());

        return redirect()->route('admin.systemCalendar');
    }

    public function show(Event $events)
    {
        //abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       
        //$events->load('event');
        $events = Event::withCount('events')
            ->get();

        return view('events.calendar', compact('events'));
    }

    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       
        $event->delete();

        //return back();
        return redirect()->route('admin.systemCalendar');
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}