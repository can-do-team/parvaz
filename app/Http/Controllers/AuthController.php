<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginAction(Request $request)
    {
        if (Auth::attempt(array('number' => $request->number, 'password' => $request->password))){
                if (Auth::user())
                    return redirect('dashboard');
                else
                    return redirect('login');
        }else{
            return redirect('login');

        }
    }


    public function register()
    {
        return view('register');
    }
    public function registerAction(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:250',
            'lastname' => 'required|string|max:250',
            'number' => 'required|string|size:11|unique:users,number',
//            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'area' => 'required|string|max:250',
//            'address' => 'required|string|max:250',
        ],[
            'firstname.required'=> 'نام را وارد کنید', // custom message
            'lastname.required'=> 'نام خانوادگی را وارد کنید', // custom message
            'number.required'=> 'شماره موبایل را وارد کنید', // custom message
            'number.unique'=> 'شماره موبایل از قبل وجود دارد', // custom message
            'number.size'=> 'شماره موبایل نامعتبر می باشد', // custom message
//            'email.required'=> 'ایمیل را وارد کنید', // custom message
            'password.required'=> 'رمزعبور را وارد کنید', // custom message
            'password.min'=> 'رمزعبور حدافل 8 کارکتر باشد', // custom message
            'repassword.required'=> 'تکرار رمزعبور را وارد کنید', // custom message
            'repassword.same'=> 'تکرار رمزعبور درست نمی باشد', // custom message
            'area.required'=> 'منطقه شهرداری را وارد کنید', // custom message
//            'address.required'=> 'آدرس را وارد کنید', // custom message

        ]);
        if ($request->password !== $request->repassword){
            return redirect('register');
        }

        User::create([
            'firstname' =>  $request->firstname,
            'lastname' => $request->lastname,
            'number' =>  $request->number,
            'email' =>  $request->number."@gmail.com",
            'password' =>  $request->password,
            'area' =>  $request->area,
            'address' =>  $request->address,
            'group_id' => null,
        ]);

        Auth::attempt(array('number' => $request->number, 'password' => $request->password));

//        $request->session()->regenerate();
        return redirect('dashboard');

    }
}
