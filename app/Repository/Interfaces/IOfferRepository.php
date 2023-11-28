<?php

namespace App\Repository\Interfaces;

interface IOfferRepository
{
    public function getAllOffers();
    public function createOffer(array $data);
}
