<div class="fixed inset-0 bg-black bg-opacity-50 {{$showing? '' : 'hidden'}}
    flex justify-center items-center"
    wire:click="$set('showing',false)">
    @if($task)
    <form class="p-12 bg-white text-black border border-gray-300 shadow-md w-1/2"
    wire:click.stop>
        <div class="w-full whitespace-nowrap mb-2">
            Task
            <input type="text" class="ml-4 border
            border-gray-200 shadow rounded p-1 w-3/4"
                   wire:model="task.name">
        </div>
        <div>Status
            <select class="ml-2 border border-gray-200 shadow rounded p-1"
                    wire:model="task.status">
                <option value="Delayed">Delayed</option>
                <option value="Completed">Completed</option>
                <option value="New">New</option>
                <option value="Deleted">Deleted</option>
            </select>
        </div>
        <div class="w-full text-right">
            <button class="text-gray-400 underline px-2 py-1 "
                    wire:click.prevent="$set('showing', false)">Cancel</button>
        <button class="bg-blue-600 text-white rounded-md px-3 py-1 hover:bg-blue-700"
                wire:click.prevent="save">Save</button>
        </div>
    </form>

        @endif
</div>
