<div class="py-10 w-full flex justify-center min-h-screen items-center bg-black text-white"
    x-data="{showEditModal: false}">
    <div class="w-full">
        @foreach($tasks as $task)
            <div class="flex w-1/2 mx-auto" wire:key="task-{{$loop->index}}">
                <livewire:task.card :task="$task"/>
                <button class="w-24 m-1 bg-gray-400 text-black shadow-md"
                        id="complete-{{$loop->index}}"
                        wire:click="$emitTo('task.edit', 'show', {{$task->id}})">Edit
                </button>
            </div>
        @endforeach
    </div>
    <livewire:task.edit />
</div>
