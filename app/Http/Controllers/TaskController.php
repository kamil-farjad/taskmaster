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

    public function update(Request $request, $taskId)
    {
        // Validate the request data
        $request->validate([
            'completed' => 'boolean', // Ensure that 'completed' is a boolean value
            // other validation rules...
        ]);
    
        // Retrieve the task
        $task = Task::find($taskId);
    
        // Update the task attributes
        $task->completed = $request->has('completed') ? 1 : 0; // Convert checkbox value to 1 or 0
    
        // Save the updated task
        $task->save();
        return view('tasks.show', compact('task'));
    
        // Redirect or respond as needed
    }
    

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}