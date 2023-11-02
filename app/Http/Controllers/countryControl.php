<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Person;
use Illuminate\Http\Request;

class countryControl extends Controller
{
    public function create(){
        return view('country.create');
    }

    public function store(Request $request){

        //         First Way to collect data from form
        // $name = request('name');
        // $capital = request('capital');
        // $currency = request('currency');
        // $population = request('population');

        //         Second Way to collect data from form
        // $name = request()->input('name');
        // $capital = request()->input('capital');
        // $currency = request()->input('currency');
        // $population = request()->input('population');

        //         Third Way to collect data from form
        //         store(Request $request)
        // $name = $request->input('name');
        // $capital = $request->input('capital');
        // $currency = $request->input('currency');
        // $population = $request->input('population');


        //         First Way to store data.
        // Country::create([
        //     'name' => $name,
        //     'capital' => $capital,
        //     'currency' => $currency,
        //     'population' => $population
        // ]);

        //         Second way to store data.
        // Country::create([
        //     'name' => request('name'),
        //     'capital' => request('capital'),
        //     'currency' => request('currency'),
        //     'population' => request('population')
        // ]);


        //         Third way to store data.
        // $country = New Country;
        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;
        // $country->save();

        //         Fourth way to store data.
        // $country = New Country;
        // $country->name = request('name');
        // $country->capital = request('capital');
        // $country->currency = request('currency');
        // $country->population = request('population');
        // $country->save();


        //         Fifth Way to store data
        // Country::create($request->all());
        // Country::create($request->only('name', 'capital', 'currency', 'population'));
        Country::create($request->except('_token'));


        return redirect('/country');

        // return view('country.create');
    }

    public function showCountryData(){
        $countries = Country::all();
        return view('country.countryData', compact('countries'));
    }

    public function edit($id){
        $country = Country::find($id);
        return view('country.edit', compact('country'));
    }
    public function update($id){
        $country = Country::find($id);
        $country->update([
            'name' => request('name'),
            'capital' => request('capital'),
            'currency' => request('currency'),
            'population' => request('population')
        ]);
        return redirect('/country');
    }

    public function destroy($id){
        Country::find($id)->delete();
        return back();
    }
    public function show($id){
        $country = Country::find($id);
        // $persons = Person::all()->where('country_id', $country->id);
        return view('country.countryShow', compact('country'));
    }
}
