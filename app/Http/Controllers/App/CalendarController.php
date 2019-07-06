<?php

namespace App\Http\Controllers\App;

use App\Group;
use App\Http\Controllers\Controller;

class CalendarController extends Controller
{
    public function index()
    {
        $group = Group::find(auth()->user()->group_id);
        $plan = $group->plans()->latest()->find(1);
        $recipes = array();

        if ($plan != null) $recipes = $plan->recipes()->orderBy('date')->get();

        return view('app.calendar.index', compact('recipes'));
    }
}
