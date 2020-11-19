<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);
//        request()->validate(['body' => 'required|max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
//            'body' => request('body')
            'body' => $attributes['body']
        ]);

        return redirect('/home  ');
    }
}
