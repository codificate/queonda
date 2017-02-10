<?php

use Illuminate\Database\Seeder;
use database\seeds\OrganizationTableSeeder;
use database\seeds\RoleTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OrganizationTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
