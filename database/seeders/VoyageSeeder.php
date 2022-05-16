<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VoyageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voyages')->insert([
            [
                'departure_date' => Carbon::now(),
                'arrival_date' => Carbon::now()->endOfWeek()->format('Y-m-d H:i'),
            ],
            [
                'departure_date' => Carbon::now(),
                'arrival_date' => Carbon::now()->endOfWeek()->format('Y-m-d H:i'),
            ]
        ]);
    }
}
