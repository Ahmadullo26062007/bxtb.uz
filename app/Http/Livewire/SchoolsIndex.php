<?php

namespace App\Http\Livewire;

use App\Models\About;
use Livewire\Component;

class SchoolsIndex extends Component
{
    public $count = 16;

    function pilus()
    {
        $this->count = $this->count + 4;
    }

    public function render()
    {
        $schools = About::with('users')->take($this->count)->get();
        return view('livewire.schools-index', compact('schools'));
    }
}
