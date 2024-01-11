<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function show_group(){
        $groups=Group::all();
        return view('show_group',['groups'=>$groups]);

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

        $groups=Group::all();
        return view('admin-dashboard.group',['groups'=>$groups]);
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
    public function store(StoreGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        dd($group);

        //check Admin
        if (Auth::user()){
            if (Auth::user()->role==1) {
                Auth::logout();
                return view('login');
            }
        }else{
            return redirect('login');
        }

        return view('admin-dashboard.group-edit',['group'=>$group]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
