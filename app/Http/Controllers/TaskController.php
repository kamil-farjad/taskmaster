<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $tasks = Task::all();
        return view('tasks.create', compact('tasks'));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Task::create([
            'title' => $request->input('title'),
            'completed' => false,
        ]);

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update([
            'title' => $request->input('title'),     
            'completed' => $request->input('completed', false),
        ]);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}