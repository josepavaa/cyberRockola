<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Song;

class RockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $songs = \App\Song::all();
        return view('rock.index', compact('songs'));
    }

    public function send($id)
    {
        $song = \App\Song::find($id);
        Queue::push('laravel', $song->url_source);
        return redirect('songs');
    }

   
}
