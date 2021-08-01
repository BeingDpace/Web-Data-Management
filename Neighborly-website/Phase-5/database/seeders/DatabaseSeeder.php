<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        DB::table('users')->insert([
            'username' => 'mike',
            'fname' => 'Mike',
            'lname' => 'Muggles',
            'dob' => '1942-03-18',
            'phone' => '333-444-5555',
            'email' => 'mikey@gmail.com',
            'role' => 'IMMIGRANT',
            'password' => 'bananas',
        ]);

        DB::table('users')->insert([
            'username' => 'jane',
            'fname' => 'Jane',
            'lname' => 'Doh!',
            'dob' => '1982-03-18',
            'phone' => '333-444-5555',
            'email' => 'janey@gmail.com',
            'role' => 'VISITOR',
            'password' => 'bananas',
        ]);

        DB::table('continents')->insert(['name' => 'North America']);
        DB::table('continents')->insert(['name' => 'South America']);
        DB::table('continents')->insert(['name' => 'Europe']);
        DB::table('continents')->insert(['name' => 'Asia']);
        DB::table('continents')->insert(['name' => 'Africa']);
        DB::table('continents')->insert(['name' => 'Antarctica']);
        DB::table('continents')->insert(['name' => 'Australia']);

        DB::table('countries')->insert(['name' => 'USA', 'continent_id' => 1]);
        /*
        (3, 'DZ', 'AF'),
        (5, 'IN', 'AS'),
        (6, 'GB', 'EU'),
        (7, 'US', 'NA'),
        (10, 'AM', 'AS'),
        (11, 'GB', 'EU');
        */

        /*
        DB::table('places')->insert(['name' => 'Ratnapark', 'city' => 'Kathmandu']);
        DB::table('places')->insert(['name' => 'Ranipokhari', 'city' => 'Kathmandu']);
        DB::table('places')->insert(['name' => 'Golden Temple', 'city' => 'Bangalore']);
        DB::table('places')->insert(['name' => 'Statue of Liberty', 'city' => 'New York']);
        */
 



    }
}
