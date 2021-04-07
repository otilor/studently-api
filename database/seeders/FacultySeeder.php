<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties = ['Faculty of Humanities','Faculty of Social and Management Science','Faculty of Science and Science Education'];
        foreach($faculties as $faculty){
            Faculty::create(['name' => $faculty]);
        }
    }
}
