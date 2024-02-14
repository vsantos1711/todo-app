<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function create() {
        return view('task.create');
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

        return back()->with('success', 'Task created successfully');
    }
}
