<?php

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
        
        App\User::create ([
            'name' => 'Frank',
            'email' => 'frankzan@gmail.com',
            'password' => Hash::make('123Mwangaza')
        ]);
    }
}
