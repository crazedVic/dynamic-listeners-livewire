<div class="{{$this->bg}} m-1 px-3 py-1 w-full rounded-sm shadow-md shadow-gray-600">
    <div class="flex justify-between">
        <span>{{$task->name}}  [{{$task->status}}]</span>
        <span>Last component refresh: {{\Carbon\Carbon::now()->toTimeString()}}</span>
    </div>
    <!-- force tailwind to include these styles -->
    <span class="hidden bg-green-500 bg-red-500 bg-blue-500 bg-gray-500 bg-yellow-600"></span>
</div>
