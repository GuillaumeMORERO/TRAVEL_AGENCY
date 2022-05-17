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
        /*
        / get home
        */
        $getWelcome = $this->get('/');
        $getWelcome->assertStatus(200)
                ->assertViewIs('vueVoyages');


    }

    public function testCreaVoyage()
    {
        // $fakeUser = User::factory()->make();


        // $admin = User::where('admin', '=', 1)->first();
        // $userTodel = User::where('email', 'testCrea@testCrea.fr')->first();
        // $testDeleteUser = $this->actingAs($admin)->delete('delUser/'.$userTodel->getid());
        // $testDeleteUser->assertJson(['status' => 'success']);
        //         $this->assertSoftDeleted($userTodel);



        $testRegisterVoyage = $this->post('/postVoyage', [
            'departure_date' => '1960-01-01',
            'arrival_date' => '1970-12-31',
        ]);
        // $this->assertDatabaseHas('voyages', ['departure_date' => '1960-01-01']);

        
    }
}
