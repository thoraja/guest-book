<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AddressService;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getProvinces(AddressService $addressService)
    {
        return $addressService->getProvinces();
    }

    public function getProvince($province, AddressService $addressService)
    {
        return $addressService->getProvince($province);
    }

    public function getCities($province, AddressService $addressService)
    {
        return $addressService->getCities($province);
    }

    public function getAllCities(AddressService $addressService)
    {
        return $addressService->getCities();
    }
}
