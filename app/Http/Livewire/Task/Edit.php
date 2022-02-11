<?php

namespace App\Http\Livewire\Task;

use App\Models\Task;
use Livewire\Component;

class Edit extends Component
{
    protected $listeners = ['show'];

    public $task;
    public $showing = false;

    protected $rules = [
        'task.status' => 'required',
        'task.name' => 'required|string|max:255'
    ];

    public function show(Task $task)
    {
        $this->task = $task;
        $this->showing = true;
    }

    public function render()
    {
        return view('livewire.task.edit');
    }

    public function save()
    {
        $this->validate();
        $this->task->save();

        $this->showing = false;
        //tell card to refresh
        $this->emit('update-task-' . $this->task->id);
    }
}
