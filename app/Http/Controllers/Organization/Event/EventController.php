<?php

namespace App\Http\Controllers\Organization\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Http\Requests\Organization\Event\EventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        return $request->all();

        return view('organization.events.index', [
            'events' => Event::paginate(5)
        ]);
    }

    public function create()
    {
        return view('organization.events.create');
    }

    public function store(EventRequest $request)
    {
        Event::create($request->validated());

        return redirect()
            ->route('organization.events.index')
            ->with('success', 'Evento cadastrado com sucesso!');
    }
}
