<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scienceAndScienceEducationDepartments = ['Biological Science', 'Chemical Science', 'Earth Science', 'Mathematical Science', 'Physics', 'Science Education'];
        $socialAndManagementScienceDepartments = ['Accounting', 'Business Administration', 'Economics', 'Mass Communication', 'Banking and Finance', 'Political Science and International Relations'];
        $humanitiesDepartments = ['Christian Religious Studies', 'English and Literary Studies', 'History and Diplomatic Studies', 'French'];

        // process for FSSE first


        foreach ($scienceAndScienceEducationDepartments as $department) {
            $facultyId = Faculty::firstWhere('short_code', 'SSE')->id;
            Department::create(['name' => $department, 'faculty_id' => $facultyId]);
        }

        foreach ($socialAndManagementScienceDepartments as $department) {
            $facultyId = Faculty::firstWhere('short_code', 'SMS')->id;
            Department::create(['name' => $department, 'faculty_id' => $facultyId]);
        }

        foreach ($humanitiesDepartments as $department) {
            $facultyId = Faculty::firstWhere('short_code', 'HUM')->id;
            Department::create(['name' => $department, 'faculty_id' => $facultyId]);
        }
    }
}
 