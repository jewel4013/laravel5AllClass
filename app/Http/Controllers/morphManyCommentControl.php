<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Status;
use App\Models\Video;
use Illuminate\Http\Request;

class morphManyCommentControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('morph.onetomany.commentindex', [
            'comments' => Comment::all(),
        ]);
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
        
    }

    public function status_comment($id){
        $status = Status::find($id);
        $status->comments()->create([
            'comment' => request('comment')
        ]);

        return back();
    }

    public function video_comment($id){
        $video = Video::find($id);
        $video->comments()->create([
            'comment' => request('comment'),
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
