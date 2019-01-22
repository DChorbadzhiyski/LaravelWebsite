<?php

use Illuminate\Database\Seeder;
use App\User;
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
            'name' => 'Dimitar Chorbadzhiyski',
            'email' => 'U1560007@unimail.hud.ac.uk',
            'password' => Hash::make('u1560007'),
            'remember_token' => str_random(),
            ]);        
    }
}
