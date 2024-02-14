@extends('layout')

@section('update-task-form')
<form action="{{ route('task.edit', $task->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
        <h3 class="mb-4 text-4xl font-bold">Update a task</h3>
        <div class="flex flex-col rounded p-4 max-w-[80%] bg-slate-800 gap-2 mb-4">

            <label for="title" class="text-base font-semibold">Title <span class="text-red-600">*</span></label>
            <input type="text" id="title" name="title" placeholder="Task title..." class="p-2 rounded bg-slate-600"
                value="{{$task->title}}">
            @error('title')
            <div class="text-sm text-red-600">
                {{ $message }}
            </div>
            @enderror

            <label for="description" class="text-base font-semibold">Description</label>
            <textarea id="description" name="description" placeholder="A short description..."
                class="p-2 rounded bg-slate-600">{{$task->description}}</textarea>


            <label for="status">STATUS</label>
            <select name="status" id="status" class="p-2 rounded bg-slate-600">

                <option value="BACKLOG" class="font-bold ">
                    BACKLOG
                </option>

                <option value="IN_TEST" class="font-bold ">
                    IN TEST
                </option>

                <option value="IN_PROGRESS" class="font-bold">
                    PROGRESS
                </option>

                <option value="DEPLOYED" class="font-bold">
                    DEPLOYED
                </option>

            </select>
            <button type=" submit"
                class="px-2 py-1 mt-2 font-bold transition rounded bg-emerald-700 max-w-32 hover:bg-emerald-600">
                Save!</button>
        </div>

    </div>
</form>
@endsection