<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCountryRequest;
use App\Models\Country;
use App\Http\Traits\MessageStatus;
use App\Repository\Interfaces\ICountryRepository;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    use MessageStatus;

    /**
     * Display a listing of the resource.
     */

    public $country;

    public function __construct(ICountryRepository $country)
    {
        $this->country = $country;
    }
    public function index()
    {
        $countries = $this->country->getAllCountries();
        return view('admin.countries.index')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $data = $request->all();
        $this->country->createCountry($data);
        return redirect()->route('countries.index')->with('success', $this->addedMsg());
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
    public function edit(Country $country)
    {
        return view('admin.countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCountryRequest $request, Country $country)
    {
        $data = $request->all();
        $this->country->updateCountry($country, $data);
        return redirect()->route('countries.index')->with('success', $this->updatedMsg());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('success', $this->deletedMsg());
    }
}
