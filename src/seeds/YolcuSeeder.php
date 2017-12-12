<?php
namespace Tkaratug\Yolcu;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YolcuSeeder extends Seeder
{
    public function run()
    {
        // Countries
        DB::table('countries')->insert([
            'country_name'  => 'Turkey',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        DB::table('countries')->insert([
            'country_name'  => 'Greece',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        DB::table('countries')->insert([
            'country_name'  => 'Italy',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        // Hotels
        DB::table('hotels')->insert([
            'country_id'    => 1,
            'hotel_name'    => 'Hotel Ali',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        DB::table('hotels')->insert([
            'country_id'    => 1,
            'hotel_name'    => 'Hotel Veli',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        DB::table('hotels')->insert([
            'country_id'    => 2,
            'hotel_name'    => 'Hotel Yorgo',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        DB::table('hotels')->insert([
            'country_id'    => 2,
            'hotel_name'    => 'Hotel Athens',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        DB::table('hotels')->insert([
            'country_id'    => 3,
            'hotel_name'    => 'Hotel Rome',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);

        DB::table('hotels')->insert([
            'country_id'    => 3,
            'hotel_name'    => 'Hotel Venice',
            'created_at'    => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now()
        ]);
    }
}
