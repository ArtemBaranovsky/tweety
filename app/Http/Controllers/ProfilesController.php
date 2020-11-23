<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
//        return $user;
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
//        $this->authorize('edit', $user);  // comment if added to routes this middleware

//        abort_if($user->isNot(current_user()), 404);

//        if ($user->isNot(current_user())) {
//            abort(404);
//        }
        return view('profiles.edit', compact('user'));
    }
}
