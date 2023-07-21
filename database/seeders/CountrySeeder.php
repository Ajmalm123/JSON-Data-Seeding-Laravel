<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json=File::get(public_path('data/countries.json'));
        $countries=json_decode($json);

        foreach($countries->countries as $key=>$value){
            Country::create([
               'name'=>$value->name,
               'code'=>$value->code
            ]);
        }


    }
}
