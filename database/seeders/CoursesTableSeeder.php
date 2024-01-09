<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            'Computer Packages',
            'Networking',
            'Artificial Intelligence',
            'Database Management',
            'Web Development',
            'Cybersecurity',
        ];

        foreach ($courses as $course) {
            DB::table('courses')->insert([
                'CourseCode' => 'CS ' . rand(400, 499),
                'CourseName' => $course,
            ]);
        }
    }
}
