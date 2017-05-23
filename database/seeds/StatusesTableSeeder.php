<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Status::class)->create([
          'name'            => 'Novo'
        ]);
        
        factory(\App\Models\Status::class)->create([
          'name'            => 'Usado'
        ]);
    }
}
