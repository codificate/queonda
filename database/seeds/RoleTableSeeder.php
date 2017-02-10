<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 06/02/17
 * Time: 11:17 PM
 */

namespace database\seeds;

use Illuminate\Database\Seeder;
use App\Models\Role;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidus
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        $role = new Role();

        $role->uuid = $faker->uuid;
        $role->name = 'Admin';
        $role->description = 'Administrador';
        $role->save();

        $role = new Role();

        $role->uuid = $faker->uuid;
        $role->name = 'User';
        $role->description = 'Usuario';
        $role->save();
        
    }

}