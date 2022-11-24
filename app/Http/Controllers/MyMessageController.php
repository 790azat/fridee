<?php

namespace App\Http\Controllers;

use App\Models\ChMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyMessageController extends Controller
{
    public function index() {

        if (Auth::check()) {
            $message = json_decode(ChMessage::where('to_id',Auth::user()->id)->where('seen', 0)->get());
        }
        else {
            return view('welcome');
        }

        if ($message == null) {
            $messageCount = 0;
            return view('welcome',['messageCount' => $messageCount]);
        }
        else {
            $messageCount = count(ChMessage::where('to_id',Auth::user()->id)->where('seen', 0)->get());
        }

        return view('welcome',['messageCount' => $messageCount]);

    }
}
