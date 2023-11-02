<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class signUpControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('signup.signup', [
            'signups' => Signup::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('signup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        request()->validate([
            'fname' => 'required|min:3|max:15',
            'lname' => 'required|min:3|max:15',
            'email' => 'required|unique:signups,email,except,id',
            'uname' => 'required|unique:signups,uname,except,id',
            'date_of_birth' => 'required|date',
            'phone' => 'required|min:11|max:11',
            'bio' => 'required',
            'post_code' => 'required',
            'password' => 'required|confirmed',
        ]);

        Signup::create(request()->except('_token', 'password', 'password_confirmation'));

        return redirect('/signup');
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
