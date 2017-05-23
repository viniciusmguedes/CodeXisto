<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        //$this->call(SellersTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
        
        Model::reguard();
    }
}