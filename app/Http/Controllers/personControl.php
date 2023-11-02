<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Person;
use Illuminate\Http\Request;

class personControl extends Controller
{
    public function index(){
        $persons = Person::all();
        return view('person.persons', compact('persons'));
    }
    public function create(){
        $countries = Country::all();
        return view('person.create', compact('countries'));
    }
    public function store(){
        Person::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'country_id' => request('country_id')
        ]);
        return redirect('/person');
    }

    public function show($id){
        $person = Person::find($id);
        return view('person.personShow', compact('person'));
    }

    public function destroy($id){
        Person::find($id)->delete();
        return back();
    }
}
