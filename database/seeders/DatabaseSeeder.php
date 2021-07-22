<?php

namespace Database\Seeders;

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
        //$this->call(TodosSeeder::class);
        DB::table('todos_table')->insert([
            'name' => Str::random(10),
            'description' => Str::random(10).'@gmail.com',
            'completed' => false
        ]);
    }
}
