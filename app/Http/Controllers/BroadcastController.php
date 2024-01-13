<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBroadcastRequest;
use App\Http\Requests\UpdateBroadcastRequest;
use App\Models\Broadcast;
use Illuminate\Support\Facades\Auth;

class BroadcastController extends Controller
{
    public function broadcast_user(){
        $broadcasts=Broadcast::all();
        return view('broadcast_user',['broadcasts'=>$broadcasts]);

    }
    public function index()
    {
        //check Admin
        if (Auth::user()){
            if (Auth::user()->role==1) {
                Auth::logout();
                return view('login');
            }
        }else{
            return redirect('login');
        }

        $broadcast=Broadcast::all();
        return view('admin-dashboard.broadcast',['broadcasts'=>$broadcast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBroadcastRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Broadcast $broadcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Broadcast $broadcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBroadcastRequest $request, Broadcast $broadcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Broadcast $broadcast)
    {
        //
    }
}
