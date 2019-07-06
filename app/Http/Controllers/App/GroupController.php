<?php

namespace App\Http\Controllers\App;

use App\Group;
use App\User;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function create()
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'gender' => 'required|in:m,f,o',
        ]);

        $user = new User([
            'name' => request('name'),
            'gender' => request('gender'),
            'password' => bcrypt(str_random(8)),
            'experience' => 0
        ]);

        Group::find(auth()->user()->group_id)->users()->save($user);

        return back();
    }

    public function edit()
    {
        // Add validation to check the user submitting the request is the admin of the group
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'gender' => 'required|in:m,f,o',
        ]);

        $user = User::find(request('id'));
        $user->fill(request()->all());
        $user->save();

        return back();
    }

    public function destroy()
    {
        User::destroy(request('id'));

        return back();
    }


    // Implement later
    public function inviteUser()
    {
        // Send an invite code
    }
}
