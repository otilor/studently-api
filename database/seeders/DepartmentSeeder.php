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
        $departments = ['Biological Science','Chemical Science','Earth Science','Mathematical Science','Physics','Science Education','Accounting','Business Administration','Economics','International Relations','Political Science','Mass Communication','Christian Religious Studies','English and Literary Studies','French','History and Diplomatic Studies'];
        $faculties = Faculty::pluck('id')->toArray();
        $key = array_rand($faculties);
        // dd($key);
        foreach($departments as $department)
        {
            Department::create(['name' => $department,'faculty_id' => $faculties[$key]]);
        }
        
    }
}
