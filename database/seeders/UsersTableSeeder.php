<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Vincent',
            'email' => 'vincent@gmail.com',
            'password' => bcrypt('mautauaja7'), 
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'username' => 'Andi',
            'email' => 'andi@gmail.com',
            'password' => bcrypt('andi7'), 
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'username' => 'Christine',
            'email' => 'christine@gmail.com',
            'password' => bcrypt('chrisine7'), 
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'username' => 'Jane',
            'email' => 'jane@gmail.com',
            'password' => bcrypt('jane7'), 
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'username' => 'Joshua',
            'email' => 'joshua@gmail.com',
            'password' => bcrypt('joshua7'), 
            'created_at' => now(),
        ]);
    }
}
