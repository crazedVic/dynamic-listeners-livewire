<?php

namespace App\Http\Livewire\Task;

use Livewire\Component;

class Card extends Component
{
    public $listeners = [];

    public $task;

    public function mount($task){
        $this->listeners = ["update-task-" . $task->id => "updateTask"];
    }

    public function updateTask(){
        //calling this triggers refresh
    }

    public function render()
    {
        return view('livewire.task.card');
    }

    public function getBgProperty(){
        return match ($this->task->status) {
            "Delayed" => "bg-red-500",
            "Completed" => "bg-green-500",
            "New" => "bg-blue-500",
            "Pending" => "bg-yellow-600",
            default => "",
        };
    }
}
