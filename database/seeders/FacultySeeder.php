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
        $faculties = ['Humanities','Social and Management Science','Science and Science Education'];
        foreach($faculties as $faculty){
            $short_code = match ($faculty) {
              'Humanities' => 'HUM',
                'Social and Management Science' => 'SMS',
                'Science and Science Education' => 'SSE',
            };
            Faculty::create(['name' => $faculty, 'short_code' => $short_code]);
        }
    }
}
