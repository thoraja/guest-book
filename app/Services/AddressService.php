<?php

namespace App\Services;

use App\Models\Province;
use Illuminate\Support\Facades\Http;

class AddressService
{
    public function getProvinces()
    {
        $provinces = Province::get();
        return $provinces;
    }

    public function getProvince($provinceCode)
    {
        $province = Http::get('https://d.kapanlaginetwork.com/banner/test/province.json')->collect();
        return $province->where('kode', $provinceCode)->first();
    }

    public function getCities($provinceCode = null)
    {
        $cities = Http::get('https://d.kapanlaginetwork.com/banner/test/city.json')->collect();
        if ($provinceCode) {
            $cities = $cities->filter(function($value) use ($provinceCode) {
                return str_starts_with($value['kode'], $provinceCode);
            });
        }
        return $cities;
    }

    public function getCity($cityCode)
    {
        $city = Http::get('https://d.kapanlaginetwork.com/banner/test/city.json')->collect();
        return $city->where('kode', $cityCode)->first();
    }
}

