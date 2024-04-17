@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container m-5">
<button class="btn btn-primary mb-5" ><a href="{{route('tasks.create')}}" style="color:whitesmoke; text-decoration:none">Add Post</a></button><br>        

    


@forelse ($tasks as $task)
         
            <a style="text-decoration:none;"  href="{{ route ('tasks.show', $task->id ) }}">{{$task->description}}</a><br>
           
        @empty
           <h2>No Task found</h2> 
        @endforelse
        <div class="container mx-auto "> {{ $tasks->links('pagination::bootstrap-5')}} </div>  
    </div>    
@endsection