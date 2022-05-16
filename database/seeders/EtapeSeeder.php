<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EtapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etapes')->insert([

            // voyage 1
            [
                "voyage_id"=>1,
                "type"=> "plane",
                "transport_number"=> "SK22",
                "departure"=> "Stockholm",
                "arrival"=> "New York JFK",
                "seat"=> "7B",
                "gate"=> "22",
                "baggage_drop"=> null,
                "departure_date"=> null,
                "arrival_date"=> null,
            ],
            [
                "voyage_id"=>1,
                "type"=> "plane",
                "transport_number"=> "SK22",
                "departure"=> "Stockholm",
                "arrival"=> "New York JFK",
                "seat"=> "7B",
                "gate"=> "22",
                "baggage_drop"=> null,
                "departure_date"=> null,
                "arrival_date"=> null,
            ],
            [
                "voyage_id"=>1,
                "type"=> "bus",
                "transport_number"=> "airport",
                "departure"=> "Barcelona",
                "arrival"=> "Gerona Airport",
                "seat"=> null,
                "gate"=> null,
                "baggage_drop"=> null,
                "departure_date"=> null,
                "arrival_date"=> null,
            ],
            [
                "voyage_id"=>1,
                "type"=> "plane",
                "transport_number"=> "SK455",
                "departure"=> "Gerona Airport",
                "arrival"=> "Stockholm",
                "seat"=> "3A",
                "gate"=> "45B",
                "baggage_drop"=> "344",
                "departure_date"=> null,
                "arrival_date"=> null,
            ],
            [
                "voyage_id"=>1,
                "type"=> "train",
                "transport_number"=> "78A",
                "departure"=> "Madrid",
                "arrival"=> "Barcelona",
                "seat"=> "45B",
                "gate"=> null,
                "baggage_drop"=> null,
                "departure_date"=> null,
                "arrival_date"=> null,
            ],

            // voyage 2
            ["voyage_id"=>2, "type"=> "bus", "transport_number"=> "B1", "departure"=> "Grasse", "arrival"=> "Cannes", "seat"=> null, "gate"=> null, "baggage_drop"=> null, "departure_date"=> null, "arrival_date"=> null],
            ["voyage_id"=>2, "type"=> "train", "transport_number"=> "TER-A", "departure"=> "Cannes", "arrival"=> "Nice Riquier", "seat"=> null, "gate"=> null, "baggage_drop"=> null, "departure_date"=> null, "arrival_date"=> null],
            ["voyage_id"=>2, "type"=> "bus", "transport_number"=> "B2", "departure"=> "Nice Riquier", "arrival"=> "Nice", "seat"=> null, "gate"=> null, "baggage_drop"=> null, "departure_date"=> null, "arrival_date"=> null],
            ["voyage_id"=>2, "type"=> "plane", "transport_number"=> "P455", "departure"=> "Nice", "arrival"=> "Paris", "seat"=> "3A", "gate"=> "45B", "baggage_drop"=> null, "departure_date"=> null, "arrival_date"=> null],
            ["voyage_id"=>2, "type"=> "plane", "transport_number"=> "P42", "departure"=> "Paris", "arrival"=> "Londre", "seat"=> "96B", "gate"=> "12", "baggage_drop"=> "123", "departure_date"=> null, "arrival_date"=> null],
            ["voyage_id"=>2, "type"=> "train", "transport_number"=> "T9 3/4", "departure"=> "Londre", "arrival"=> "Hogwarts Castle", "seat"=> "6", "gate"=> null, "baggage_drop"=> null, "departure_date"=> null, "arrival_date"=> null],
            

        ]);

    }
}
