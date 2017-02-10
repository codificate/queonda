<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 09/02/17
 * Time: 06:22 PM
 */

namespace database\seeds;

use Illuminate\Database\Seeder;
use App\Models\Organization;

class OrganizationTableSeeder extends Seeder
{

    public function run()
    {
        
        $faker = \Faker\Factory::create();

        $organization = new Organization();

        $organization->uuid = $faker->uuid;
        $organization->name = 'Ninguna';
        $organization->cuil = 'N/A';
        $organization->save();

    }

}