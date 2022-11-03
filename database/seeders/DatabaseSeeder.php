<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Area;
use App\Models\Spot;
use App\Models\User;
use App\Models\Place;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Faiz Elfahad',
            'username' => 'kanzen523',
            'password' => bcrypt('prj977je94')
        ]);

        User::create([
            'name' => 'Alvin',
            'username' => 'faiz2345',
            'password' => bcrypt('prj977je94')
        ]);

        User::create([
            'name' => 'Emaa',
            'username' => 'faiz1234',
            'password' => bcrypt('prj977je94')
        ]);

        Place::create([
            'name' => 'POC BRI Jakarta',
        ]);
        Place::create([
            'name' => 'POC BRI Depog',
        ]);

        Area::Create([
            'name' => 'Lantai 1',
            'place_id' => 1,
            'area_image' => 'lantai1.png'
        ]);

        Area::Create([
            'name' => 'Lantai 2',
            'place_id' => 1,
            'area_image' => 'lantai2.jpg'
        ]);

        Area::Create([
            'name' => 'Lantai 1',
            'place_id' => 2,
            'area_image' => 'lantai2.jpg'
        ]);

        Spot::Create([
            'name' => 'Gudang',
            'place_id' => 1,
            'area_id' => 1,
            'sensor_name' => 'smartswitch1',
            'status' => true

        ]);

        Spot::Create([
            'name' => 'Dapur',
            'place_id' => 1,
            'area_id' => 1,
            'sensor_name' => 'smartswitch2',
            'status' => false
        ]);

        Spot::Create([
            'name' => 'Staff Room',
            'place_id' => 1,
            'area_id' => 1,
            'sensor_name' => 'smartswitch3',
            'status' => true
        ]);

        Spot::Create([
            'name' => 'Garasi',
            'place_id' => 2,
            'area_id' => 2,
            'sensor_name' => 'smartswitch4',
            'status' => false
        ]);

        Spot::Create([
            'name' => 'Lobby',
            'place_id' => 2,
            'area_id' => 2,
            'sensor_name' => 'smartswitch5',
            'status' => true
        ]);
        Spot::Create([
            'name' => 'Lobby',
            'place_id' => 2,
            'area_id' => 3,
            'sensor_name' => 'smartswitch6',
            'status' => true
        ]);
        Spot::Create([
            'name' => 'Teras',
            'place_id' => 2,
            'area_id' => 3,
            'sensor_name' => 'smartswitch7',
            'status' => true
        ]);
        Spot::Create([
            'name' => 'Ruang Manager',
            'place_id' => 2,
            'area_id' => 3,
            'sensor_name' => 'smartswitch8',
            'status' => true
        ]);
    }
}
