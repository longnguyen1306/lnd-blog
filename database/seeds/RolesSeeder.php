<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Roles::Create([ 'roleName' => 'admin' ]);
        Roles::Create([ 'roleName' => 'user' ]);
    }
}
