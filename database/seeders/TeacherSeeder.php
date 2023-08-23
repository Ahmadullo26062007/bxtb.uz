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
            ['firstname' => "Dilorom", 'lastname' => "Erkinova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Shahnoza", 'lastname' => "Zokirova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Surayyo", 'lastname' => "Odinova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Dildora", 'lastname' => "Azimova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Muyassarxon", 'lastname' => "Dexqonova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Shahlo", 'lastname' => "Shodiyeva", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Muhayyo", 'lastname' => "Qodirova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Dilorom", 'lastname' => "Vohidova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Nargiza", 'lastname' => "Erkinova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Xalima", 'lastname' => "Zokirova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Ziyoda", 'lastname' => "Asqarova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Xonzoda", 'lastname' => "Sultonova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Dilafruz", 'lastname' => "Abdussatorova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Shodiya", 'lastname' => "Abdukarimova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Zuhra", 'lastname' => "Odiljonova", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Fotima", 'lastname' => "Odiljonova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Salima", 'lastname' => "Adukarimova", 'category' => 'Matematika', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Yulduz", 'lastname' => "Qohhorova", 'category' => 'Inglis Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Gulsanam", 'lastname' => "Xojiyeva", 'category' => 'Rus Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
            ['firstname' => "Oydin", 'lastname' => "Azimova", 'category' => 'Ona Tili', 'created_at' => '2023-06-26 15:33:47', 'school_id' => 1, 'image' => 'https://bxtb.uz/images/teacher.jpeg', 'great_teacher'=>'0'],
        ]);
    }
}
