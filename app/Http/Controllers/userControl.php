<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class userControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('users.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = User::create([
            'fname' => request('fname'),
            'lname' => request('lname'),
            'email' => request('email'),
            'phone' => request('phone'),
            'uname' => request('uname'),
        ]);

        $users->profile()->create([
            'propic' => request('propic'),
            'address' => request('address'),
            'bio' => request('bio'),
            'date_of_birth' => request('date_of_birth'),
            'country_id' => request('country_id')
        ]);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('users.userProfile', compact('user'));
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
