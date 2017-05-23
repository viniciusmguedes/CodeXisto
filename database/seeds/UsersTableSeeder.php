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
        factory(\App\Models\User::class)->create([
          'name'            => 'AppXisto',
          'email'           => 'appxisto@gmail.com',
          'password'        => bcrypt('@ppX1$t0'),
          'role'            => 'admin',
          'remember_token'  => str_random(10),
        ]);

        //factory(\App\Models\User::class, 10)->create();
    }
}
