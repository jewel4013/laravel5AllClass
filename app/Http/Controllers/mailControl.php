<?php

namespace App\Http\Controllers;

use App\Mail\jrmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('mail.create');
    }
    public function sent()
    {
        $to = request('email');
        $maildata = [
            'body' => request('body'),
        ];

        Mail::to($to)->send(new jrmail($maildata));

        dd('Mail sent success');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
