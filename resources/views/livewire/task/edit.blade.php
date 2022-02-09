<div class="fixed inset-0 bg-black bg-opacity-50 {{$showing? '' : 'hidden'}}
    flex justify-center items-center"
    wire:click.away="$set('showing', false)">
    @if($task)
    <form class="p-20 bg-white text-black border border-gray-300 shadow-md w-1/2">
        <div class="w-full whitespace-nowrap">
            Task
            <input type="text" class="border border-gray-200 shadow rounded p-1 w-full"
                   wire:model="task.name">
        </div>
        <div>Status
            <select class="border border-gray-200 shadow rounded p-1"
                    wire:model="task.status">
                <option value="Delayed">Delayed</option>
                <option value="Completed">Completed</option>
                <option value="New">New</option>
                <option value="Deleted">Deleted</option>
            </select>
        </div>
        <div class="w-full text-right">
        <button class="bg-blue-600 text-white rounded-md px-2 py-1 "
                wire:click.prevent="save">Save</button>
        </div>
    </form>

        @endif
</div>
