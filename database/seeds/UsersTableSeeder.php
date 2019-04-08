<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'              => 'Super',
            'surname'           => 'Admin',
            'email'             => 'sa@coursesdemo.com',
            'password'          => bcrypt('secret'),
        ]);
    }
}
