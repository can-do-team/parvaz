<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function profile_update(Request $request){
        Auth::user()->update([
           'firstname'=>$request->firstname,
           'lastname'=>$request->lastname,
           'number'=>$request->number,
           'notif1'=>$request->notif1,
           'notif2'=>$request->notif2,
        ]);
        return redirect('dashboard');
    }
}
