<?php

namespace App\Http\Controllers;

use App\Models\ChMessage;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $message = json_decode(ChMessage::where('to_id',Auth::user()->id)->where('seen', 0)->get());

        if ($message == null) {
            $messageCount = 0;
            return view('home',['messageCount' => $messageCount]);
        }
        else {
            $messageCount = count(ChMessage::where('to_id',Auth::user()->id)->where('seen', 0)->get());
        }

        return view('home',['messageCount' => $messageCount]);
    }
}
