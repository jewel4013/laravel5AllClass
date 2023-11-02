<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class tagControl extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        return view('morph.manytomany.tag.index', [
            'tags' => Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('morph.manytomany.tag.tagCeate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tag_name = request('name');
        $valid = request()->validate([
            'name' => 'required|max:20',
            'description' => ''
        ]);
        Tag::create($valid);

        return redirect('/tags')->with('msg', $tag_name.' Tag create successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
    }
}
