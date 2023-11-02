<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class fileControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('file.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        request()->validate([
            'user_img' => 'required|mimes:jpg,jpeg,pdf|max:50000'
        ]);
        
        if(request()->hasFile('user_img')){
            $files = request()->file('user_img');

            foreach($files as $file){
                $forlder = 'uploades';
                $extention = $file->getClientOriginalExtension();
                $time = Carbon::now()->timestamp;
                $file_name = uniqid().$time.".".$extention;
                $file->move($forlder, $file_name);
                //dd($extention);
            }

            return back();
            
        }

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
