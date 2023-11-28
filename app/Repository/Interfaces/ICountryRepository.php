<?php

namespace App\Repository\Interfaces;

interface ICountryRepository
{
    public function getAllCountries();
    public function createCountry(array $data);
    public function updateCountry($country, array $data);
}
