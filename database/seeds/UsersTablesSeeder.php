<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'testing',
            'password' => Hash::make('password'),
            'firstname' => 'test',
            'lastname' => 'test',
            'email' => 'test@gmail.com',
        ]);
    }
}
