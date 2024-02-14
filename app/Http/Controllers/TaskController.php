<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function create() {
        return view('task.create');
    }

    public function listAll() {
        $tasks = Task::all();
        return view('task.list', compact('tasks'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|min:4|max:50',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        if(!$task) return back()->with('error', 'Failed to create task');

        return redirect()->route('task.list')->with('success', 'Task created successfully');
    }

    public function update (string $id) {
        $task = Task::find($id);
        if(!$task) return back()->with('error', 'Task not found');

        return view('task.update', compact('task'));
    }

    public function edit (Request $request, string $id ) {
        $task = Task::find($id);
        if(!$task) return back()->with('error', 'Task not found');

        $this->validate($request, [
            'title' => 'required|min:4|max:50',
        ]);

        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('task.list')->with('success', 'Task updated successfully');
    }

    public function delete(string $id) {
        $task = Task::find($id);
        if(!$task) return back()->with('error', 'Task not found');

        $task->delete();

        return redirect()->route('task.list')->with('success', 'Task deleted successfully');
    }
}
