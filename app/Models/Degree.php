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
        '1' => 'Oliy toifa',
        '2' => 'O`rta toifa',
        '3' => 'Birinchi toifa'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

}
