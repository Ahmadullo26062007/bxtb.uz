<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::insert([
            ['firstname' => "Dilorom", 'lastname' => "Erkinova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 2, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Shahnoza", 'lastname' => "Zokirova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 2, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Surayyo", 'lastname' => "Odinova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 2, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Dildora", 'lastname' => "Azimova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 2, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Muyassarxon", 'lastname' => "Dexqonova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 3, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Shahlo", 'lastname' => "Shodiyeva", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 3, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Muhayyo", 'lastname' => "Qodirova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 3, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Dilorom", 'lastname' => "Vohidova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 3, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Nargiza", 'lastname' => "Erkinova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 4, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Xalima", 'lastname' => "Zokirova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 4, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Ziyoda", 'lastname' => "Asqarova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 4, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Xonzoda", 'lastname' => "Sultonova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 4, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Dilafruz", 'lastname' => "Abdussatorova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 5, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Shodiya", 'lastname' => "Abdukarimova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 5, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Zuhra", 'lastname' => "Odiljonova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 5, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Fotima", 'lastname' => "Odiljonova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 5, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Salima", 'lastname' => "Adukarimova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 6, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Yulduz", 'lastname' => "Qohhorova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 6, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Gulsanam", 'lastname' => "Xojiyeva", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 6, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
            ['firstname' => "Oydin", 'lastname' => "Azimova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 6, 'image' => 'https://bxtb.uz/images/teacher.jpeg'],
        ]);
    }
}
