<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creating roles using Spatie's Role model
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'student']);
        // Add more roles as needed
    }
}
