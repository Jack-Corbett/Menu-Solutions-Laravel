<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('app.admin.index');
    }
}
