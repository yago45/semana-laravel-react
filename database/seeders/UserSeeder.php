<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(['email' => 'cesar@celke.com.br'], 
    ['name' => 'Cesar','email' => 'Cesar@celke.com.br', 'password' => '123456#']);

    User::firstOrCreate(['email' => 'Kelly@celke.com.br'], 
    ['name' => 'Kelly','email' => 'Kelly@celke.com.br', 'password' => '123456#']);
    }
}
