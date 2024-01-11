<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function show()
    {
        if (Auth::user()){
        if (Auth::user()->role==1)
            return view('dashboard');
        else if (Auth::user()->role==2)
            return view('admin-dashboard');
        else{
            return redirect('login');

        }
        }else{
            return redirect('login');
        }
    }

//    public function showAdmin()
//    {
//        if (Auth::user()){
//        if (Auth::user()->role==1)
//            return redirect('dashboard');
//        else if (Auth::user()->role==2)
//            return view('admin-dashboard');
//        else{
//            return redirect('login');
//
//        }
//        }else{
//            return redirect('login');
//        }
//    }
}
