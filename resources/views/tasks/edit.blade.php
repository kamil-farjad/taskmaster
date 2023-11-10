@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Task Title:</label>
            <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="form-check">
        <input type="checkbox" class="form-check-input" value=1 name="completed" {{ $task->completed ? 'checked' : '' }}>
        <label class="form-check-label">Completed</label>
    </div>
        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
@endsection

