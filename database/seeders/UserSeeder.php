<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = Department::pluck('id')->toArray();
        User::create(['name' => 'John Doe',
            'email' => 'johndoe@studently.test',
            'matric_no' => 'AUL/SCI/17/00113',
            'date_of_birth' => now()->addYear(),
            'department_id' => array_rand($department),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),]);
        User::factory(10)->create();
    }
}
