<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Spatie\Permission\Models\Role;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 'student' role if it doesn't exist
        $role = Role::firstOrCreate(['name' => 'student']);

        // Seed 10 students
        for ($i = 0; $i < 10; $i++) {
            $student = User::create([
                'name' => 'Student' . ($i + 1),
                'email' => 'student' . ($i + 1) . '@example.com',
                'password' => Hash::make('password'), // Default password as 'password'
                'phone' => '1234567890', // Modify as needed
                'Dept' => 'Computer Science', // Assuming all students are from the Computer Science department
                'course' => 'Computer Packages', // Defaulting one course for now
                'role_id' => $role->id, // Assign 'student' role_id (2)
            ]);

            // Attach the student to all courses
            $courses = Course::all();
            foreach ($courses as $course) {
                $course->users()->attach($student->id);
            }
        }
    }
}
