<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Post;
use Illuminate\Http\Request;

class memberControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('morph.onetoone.membercreate');
    }

    public function store(Request $request)
    {
        $memeber = Member::create([
            'name' => request('name'),
            'email' => request('email'),
        ]);

        $memeber->images()->create([
            'path' => request('img_path'),
        ]);

        return back();
    }


    public function index2()
    {
        return view('morph.onetoone.postcreate');
    }

    public function store2(Request $request)
    {
        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
        ]);

        $post->images()->create([
            'path' => request('img_path'),
        ]);

        return back();
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
