<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 'admin' role if it doesn't exist
        $role = Role::firstOrCreate(['name' => 'admin']);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Default password as 'password'
            'phone' => '1234567890', // Modify as needed
            'Dept' => 'Administration', // Modify as needed
            'role_id' => $role->id, // Assign 'admin' role_id (1)
        ]);
    }
}
