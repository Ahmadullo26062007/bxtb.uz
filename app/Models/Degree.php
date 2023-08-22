<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'type_id',
        'teacher_id'
    ];

    const TYPES = [
        '1' => 'Oliy Malumotli',
        '2' => '1-Toifali',
        '3' => '2-Toifali'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}
