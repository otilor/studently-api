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
    }
}
