<?php

namespace App\Http\Controllers\App;

use App\Group;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $members = Group::members()->get();
        return view('app.dashboard', compact('members'));
    }
}
