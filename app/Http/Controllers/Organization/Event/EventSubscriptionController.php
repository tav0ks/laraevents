<?php

namespace App\Http\Controllers\Organization\Event;

use App\Http\Controllers\Controller;
use App\Models\{Event, User};
use Illuminate\Http\Request;

class EventSubscriptionController extends Controller
{
    public function store(Event $event, Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->events()->attach($event->id);

        return back()->with('success', 'Inscrição no evento realizada com sucesso!');
    }
}
