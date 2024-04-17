@extends('layouts.app')
@section('title', 'Task')

@section('content')
        @if ($task)
        <div class="container m-5">
          <h1>{{ $task->title}}</h1>
          <p>{{ $task->description}}</p>  
          <p>{{ $task->long_description}}</p>  
          <p>{{ $task->completed}}</p>  
        <p>{{ $task->created_at}}</p>
        <p>{{ $task->updated_at}}</p>
        <div class="flex">
            <button class="btn btn-primary"><a style = "color:white;text-decoration:none" href="{{route('tasks.index')}}">Back</a></button>
            <button class="btn btn-primary"><a style = "color:white;text-decoration:none" href="{{route('tasks.edit', $task->id )}}">Edit</a></button>
            <form method="POST" action=" {{route('tasks.destroy' , $task->id) }}">
              @csrf
              @method('DELETE')
              <button class="btn btn-primary m-2"><a style = "color:white;text-decoration:none">Delete</a></button>

            </form>
        </div>
        </div>
        @else
        <p>No Task Present </p>
        @endif
@endsection     
