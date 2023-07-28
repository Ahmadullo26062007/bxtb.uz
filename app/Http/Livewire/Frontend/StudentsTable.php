<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Student;
use Livewire\Component;

class StudentsTable extends Component
{
    public $count = 8;


    public function viewMore()
    {
        $this->count = $this->count + 4;
    }

    public function render()
    {
        $students = Student::all()->take($this->count)->get();
        return view('livewire.frontend.students-table', compact('students'));
    }
}
