<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = Http::get('https://d.kapanlaginetwork.com/banner/test/province.json')->collect();
        $data = [];
        foreach ($provinces as $province) {
            $data[] = [
                'code' => $province['kode'],
                'name' => $province['nama'],
            ];
        }
        throw_if(!(Province::insert($data)), "Fail to seed province.");
    }
}
