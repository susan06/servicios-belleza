<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Security\Entities\SecurityRole::create([
            'id' => 1,
            'name' => 'Developer'
        ]);

        \App\Security\Entities\SecurityRole::create([
            'id' => 2,
            'name' => 'Super Admin'
        ]);

        \App\Security\Entities\SecurityRole::create([
            'id' => 3,
            'name' => 'Branch'
        ]);

        \App\Security\Entities\SecurityRole::create([
            'id' => 4,
            'name' => 'Client'
        ]);

    }
}
