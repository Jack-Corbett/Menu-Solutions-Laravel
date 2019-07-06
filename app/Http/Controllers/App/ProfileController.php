<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $user = auth()->user();
        return view('app.profile.index', compact('user'));
    }

    public function edit(){
        $user = auth()->user();
        return view('app.profile.edit',compact('user'));
    }

    public function update(){
        $user = auth()->user();

        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'gender' => 'required|in:m,f,o',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id
        ]);

        $user->fill(request()->all());
        $user->save();

        return redirect()->route('dashboard.profile.index');
    }
}