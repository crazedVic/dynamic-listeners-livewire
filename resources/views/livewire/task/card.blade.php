<div class="{{$this->bg}} m-1 px-3 w-full">
    <div class="flex justify-between">
        <span>{{$task->name}}  [{{$task->status}}]</span>
        <span>{{\Carbon\Carbon::now()->toDateTimeLocalString()}}</span>
    </div>
    <span class="hidden bg-green-500 bg-red-500 bg-blue-500 bg-gray-500"></span>
</div>
