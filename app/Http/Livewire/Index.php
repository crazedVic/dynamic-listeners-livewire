<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Index extends Component
{

    public $tasks;

    public function render()
    {
        error_log("render");
        $this->tasks = Task::all();
        return view('livewire.index');
    }
}
