<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Video;
use Illuminate\Http\Request;

class morphManyVideoControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('morph.onetomany.videoindex', [
            'videos' => Video::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('morph.onetomany.videocreate', [
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tags = $request->tag;

        $video = Video::create(request()->except('_token', 'tag'));

        $tag = Tag::find($tags);

        $video->tags()->attach($tag);

        return redirect('/morph/one2many/video');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('morph.onetomany.videoshow', [
            'video' => Video::find($id),
        ]);
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
