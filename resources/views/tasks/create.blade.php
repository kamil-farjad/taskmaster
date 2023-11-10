@extends('layouts.app')

@section('title', 'Create New Task')

@section('content')

    
    <center><h1>Task List</h1></center>

    <ul class="list-group">
        @forelse($tasks as $task)
            <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="{{ $task->completed ? 'text-muted text-decoration-line-through' : '' }}">{{ $task->title }}</span>
                    <div class="btn-group" role="group">
                        <a href="{{ route('tasks.show', $task) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </li>
        @empty
            <li class="list-group-item">No tasks found.</li>
        @endforelse
    </ul>

@endsection