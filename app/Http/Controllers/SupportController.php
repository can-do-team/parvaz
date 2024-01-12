<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSupportRequest;
use App\Http\Requests\UpdateSupportRequest;
use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('support');
    }
    public function faq()
    {
        return view('faq');
    }
    public function question()
    {
        return view('question');
    }
    public function questions()
    {
        $supports=Support::all();
        return view('questions',compact('supports'));
    }
    public function new(Request $request)
    {
        Support::create([
            'title'=>$request->title,
            'text'=>$request->text,
            'user_id'=>Auth::user()->id
        ]);
        return redirect("questions");
    }
    public function index()
    {
        //
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
    public function store(StoreSupportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Support $support)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupportRequest $request, Support $support)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Support $support)
    {
        //
    }
}
