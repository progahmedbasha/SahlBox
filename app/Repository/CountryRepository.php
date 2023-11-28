<?php

namespace App\Repository;

use App\Models\Country;
use App\Repository\Interfaces\ICountryRepository;

class CountryRepository implements ICountryRepository
{
    public function getAllCountries()
    {
        return Country::paginate(config('admin.pagination'));
    }
    public function createCountry(array $data)
    {
        Country::create($data);
    }
    public function updateCountry($country, array $data)
    {
        $country->update([
            'name' => $data['name'],
            'rate' => $data['rate']
        ]);
    }
}
