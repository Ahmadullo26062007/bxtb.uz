<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            ['fullname'=>'Erkinova Dilorom','class_id'=>7,'school_id'=>2,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Zokirova Shahnoza','class_id'=>8,'school_id'=>2,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Odinova Surayyo','class_id'=>9,'school_id'=>2,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Azimova Dildora','class_id'=>10,'school_id'=>2,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
        ['fullname'=>'Erkinova Dilorom','class_id'=>7,'school_id'=>3,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Zokirova Shahnoza','class_id'=>8,'school_id'=>3,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Odinova Surayyo','class_id'=>9,'school_id'=>3,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Azimova Dildora','class_id'=>10,'school_id'=>3,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
        ['fullname'=>'Erkinova Dilorom','class_id'=>7,'school_id'=>4,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Zokirova Shahnoza','class_id'=>8,'school_id'=>4,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Odinova Surayyo','class_id'=>9,'school_id'=>4,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Azimova Dildora','class_id'=>10,'school_id'=>4,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
        ['fullname'=>'Erkinova Dilorom','class_id'=>7,'school_id'=>5,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Zokirova Shahnoza','class_id'=>8,'school_id'=>5,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Odinova Surayyo','class_id'=>9,'school_id'=>5,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Azimova Dildora','class_id'=>10,'school_id'=>5,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
        ['fullname'=>'Erkinova Dilorom','class_id'=>7,'school_id'=>6,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Zokirova Shahnoza','class_id'=>8,'school_id'=>6,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Odinova Surayyo','class_id'=>9,'school_id'=>6,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
            ['fullname'=>'Azimova Dildora','class_id'=>10,'school_id'=>6,'image'=>'https://bxtb.uz/images/teacher.jpeg'],
        ]);
    }
}
