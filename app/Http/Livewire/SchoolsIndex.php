<?php

namespace App\Http\Livewire;

use App\Models\About;
use Livewire\Component;

class SchoolsIndex extends Component
{
    public $count=8;

    function pilus()
    {
        $this->count=$this->count+4;
    }
    public function render()
    {
        $schools= About::take($this->count)->with('users')->orderByDesc('id')->get();
        return view('livewire.schools-index',compact('schools'));
    }
}
