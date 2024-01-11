<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        $user=Auth::user();
        return view('profile',compact("user"));
    }
    public function subscribers(){
        return view('subscribers');
    }
    public function send_document(){
        return view('send-document');
    }
}
