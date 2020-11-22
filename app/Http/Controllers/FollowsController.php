<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        // follow the given user
        // have the authenticated user follow the given user
/*        if (auth()->user()->following($user)) {
            auth()->user()->unfollow($user);
        } else {
            auth()->user()->follow($user);
        }*/
        auth()->user()->toggleFollow($user);

        return back();
    }
}
