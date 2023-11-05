<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Status;
use App\Models\Tag;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class morphManyStatusControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('morph.onetomany.statusindex', [
            'statuses' => Status::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('morph.onetomany.statuscreate', [
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tags = $request->tag;

        $status = Status::create(request()->except('_token', 'tag'));

        $tag =Tag::find($tags);

        // dd($tag->toArray());
        $status->tags()->attach($tag);


        return redirect('/morph/one2many/status');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('morph.onetomany.statusshow', [
            'status' => Status::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $status = Status::find($id);
        // $tag_id = $status->tags->pluck('id');


        return view('morph.onetomany.statusedit', [
            'status' => $status,
            'tags' => Tag::all(),
            // 'tag_id' => $tag_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $tags = $request->tag;
        $tag =Tag::find($tags);

        $status = Status::find($id);

        $status->update(request()->except('_token', 'tag'));

        // dd($tag->toArray());
        // $status->tags()->detach($status->tag);
        // $status->tags()->attach($tag);

        $status->tags()->sync($tag);


        return redirect('/morph/one2many/status/'.$status->id)->with('success', 'Status update successful.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
