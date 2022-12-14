<?php

namespace App\Http\Controllers;

use App\Models\ChMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyMessageController extends Controller
{
    public function index() {

        $team = User::all();

        if (Auth::check()) {
            $message = json_decode(ChMessage::where('to_id',Auth::user()->id)->where('seen', 0)->get());
        }
        else {
            return view('welcome',['team' => $team]);
        }

        if ($message == null) {
            $messageCount = 0;
            return view('welcome',['messageCount' => $messageCount ,'team' => $team]);
        }
        else {
            $messageCount = count(ChMessage::where('to_id',Auth::user()->id)->where('seen', 0)->get());
        }

        return view('welcome',['messageCount' => $messageCount,'team' => $team]);

    }
}
