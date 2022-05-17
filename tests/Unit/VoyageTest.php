<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\Voyage;
use App\Models\Etape;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class VoyageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRoute()
    {
        $getWelcome = $this->get('/');
        $getWelcome->assertStatus(200)
                ->assertViewIs('vueVoyages');
    }

    public function testCreaVoyage()
    {
        $testRegisterVoyage = $this->post('/postVoyage', [
            'departure_date' => '1980-01-01 01:01:01',
            'arrival_date' => '1980-12-12 01:01:01',
        ]);
        $this->assertDatabaseHas('voyages', ['departure_date' => '1980-01-01 01:01:01']);
    }

    public function testDeleteVoyage()
    {
        $testVoyage = Voyage::where('departure_date', '1980-01-01 01:01:01')->first();
        $testDeleteVoyage = $this->get('/delVoyage/'.$testVoyage->id);
        $testDeleteVoyage->assertStatus(302);
        $this->assertDatabaseMissing('voyages', ['departure_date' => '1980-01-01 01:01:01']);
    }
}
