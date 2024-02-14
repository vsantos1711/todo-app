@extends('layout')
@section('content')
<form>
    <div class="container">
        <h3 class="text-4xl font-bold mb-4">Create a task</h3>
        <div class="flex flex-col border rounded p-4 max-w-[80%] bg-slate-800 border-slate-900 gap-2">

            <label for="title" class="text-base font-semibold">Title <span class="text-red-600">*</span></label>
            <input type="text" id="title" name="title" placeholder="Task title..." class="p-2 rounded bg-slate-600">

            <label for="description" class="text-base font-semibold">Description</label>
            <textarea id="description" name="description" placeholder="A short description..."
                class="rounded p-2 bg-slate-600 ">
            </textarea>


            <button type="submit"
                class=" bg-emerald-700 rounded py-1 px-2 max-w-32 hover:bg-emerald-600 transition mt-2">Create</button>
        </div>
</form>
@endsection
