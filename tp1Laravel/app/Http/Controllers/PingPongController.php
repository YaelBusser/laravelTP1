<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingPongController extends Controller
{
    public function ping()
    {
        return view('ping', []);
    }

    public function pong()
    {
        return view('pong', []);
    }
}
