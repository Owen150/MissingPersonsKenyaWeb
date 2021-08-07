<?php

namespace Database\Seeders;

use App\User;

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

//Used to put data in the database for testing
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'tyap6@gmail.com')->first();  //Where gives us a builder; Calling get to get the resaults
        
        if(!$user){
            User::create([
                'name' => 'Michael Owino',
                'email' => 'tyap6@gmail.com',
                'password' => Hash::make('password')
            ]);
        }
    }
}
