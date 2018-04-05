<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'status' => 1,
            'rol' => 'invitado',
        ]);

         DB::table('users')->insert([
            'name' => 'Juan Manuel PG',
            'email' => 'jm@itsc.com',
            'password' => bcrypt('123456789'),
            'status' => 1,
            'rol' => 'admin',
        ]);

    }
}
