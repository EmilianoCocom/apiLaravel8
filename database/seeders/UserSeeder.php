<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create user
        $user = User::create([
            'name' => 'Jose Cocom',
            'email' => 'joseemilianococom@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        //to assign role to user
        $user->assignRole('admin');
        //create fake users
        User::factory(99)->create();
    }
}
