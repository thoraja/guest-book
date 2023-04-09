<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = Http::get('https://d.kapanlaginetwork.com/banner/test/province.json')->collect();
        $data = [];
        foreach ($cities as $city) {
            $data[] = [
                'code' => $city['kode'],
                'name' => $city['nama'],
            ];
        }
        throw_if(!(City::insert($data)), "Fail to seed city.");
    }
}
