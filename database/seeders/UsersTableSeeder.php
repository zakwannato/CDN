<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['user'];
        $educations = ['PHD', 'Master', 'Degree', 'Diploma', 'School'];
        $locations = ['Malaysia', 'International'];

        for ($i = 0; $i < 50; $i++) {
            $name = $this->generateName();
            $email = Str::slug($name) . '@example.com';
            $phone = $this->generatePhoneNumber();
            $education = $this->generateRandomElement($educations);
            $experience = rand(0, 20);
            $location = $this->generateRandomElement($locations);
            $skills = [
                'skill1' => rand(0, 1),
                'skill2' => rand(0, 1),
                'skill3' => rand(0, 1),
                'skill4' => rand(0, 1),
                'skill5' => rand(0, 1),
            ];

            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt('12345678'),
                'role' => 'user',
                'phone' => $phone,
                'education' => $education,
                'experience' => $experience,
                'location' => $location,
                'skill1' => $skills['skill1'],
                'skill2' => $skills['skill2'],
                'skill3' => $skills['skill3'],
                'skill4' => $skills['skill4'],
                'skill5' => $skills['skill5'],
            ]);
        }
    }

    private function generateName()
    {
        $firstNames = ['John', 'Jane', 'Michael', 'Emily', 'David', 'Sarah', 'Chris', 'Emma', 'Daniel', 'Lisa'];
        $lastNames = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];

        $firstName = $this->generateRandomElement($firstNames);
        $lastName = $this->generateRandomElement($lastNames);

        return $firstName . ' ' . $lastName;
    }

    private function generatePhoneNumber()
    {
        $phone = '01'; // Start with '01'

        // Append 8 random digits
        for ($i = 0; $i < 8; $i++) {
            $phone .= rand(0, 9);
        }

        return $phone;
    }

    private function generateRandomElement($array)
    {
        return $array[array_rand($array)];
    }
    
}
