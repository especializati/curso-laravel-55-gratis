<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name'      => 'Rodrigo Brito',
            'email'     => 'rodrigobrito101@hotmail.com',
            'password'  => bcrypt('123456'),
        ]);

        User::create([
            'name'      => 'Outro Rodrigo',
            'email'     => 'rodrigobrito101@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
