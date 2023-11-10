@extends('layouts.app')
@section('title', 'TaskMaster | Your Ultimate ToDo App Experience')
@section('content')
    
<div class="container my-4">
    <div class="row p-3 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-5 fw-bold lh-1 text-body-emphasis">TaskMaster: Your Ultimate ToDo App Experience</h1>
        <p class="lead">TaskMaster is a user-friendly ToDo app designed to streamline your daily tasks and boost productivity. With intuitive features, seamless navigation, and customizable options, managing your to-do list has never been easier.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="/tasks/create" type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">View Tasks</a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="https://img.freepik.com/free-vector/checklist-survey-concept_74855-6987.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699315200&semt=sph" alt="" width="400" height="380" style="border-radius: 20%;">
      </div>
    </div>
  </div>


<center><h1>Add New Task</h1></center>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Task Title:</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>



 <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="hanging-icons">
    <center><h1 class="pb-2">Key Features</h1></center>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Create Task</h3>
          <p>Easily add new tasks to your to-do list with the simple and efficient "Create" feature. Whether it's a new project, deadline, or a personal goal, TaskMaster lets you input tasks quickly, ensuring nothing is overlooked.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Update Task</h3>
          <p>Stay flexible and adaptive with the "Update" feature. Modify task details on the fly to accommodate changes in priority, deadlines, or any additional information. TaskMaster ensures that your to-do list remains dynamic and reflective of your evolving needs.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
        </div>
        
        <div>
          <h3 class="fs-2 text-body-emphasis">Delete Task</h3>
          <p>Maintain a clutter-free task list by using the "Delete" feature to remove completed or unnecessary tasks. TaskMaster recognizes the importance of a focused workspace, helping you declutter and concentrate on what truly matters.</p>
        </div>
      </div>
    </div>
  </div>

<!--     
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
    </ul> -->

    <!-- <a href="{{ route('tasks.create') }}" class="btn btn-primary mt-3">Create New Task</a> -->
@endsection