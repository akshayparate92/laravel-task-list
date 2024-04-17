@extends('layouts.app')
@section('title', 'Edit Task')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST" action=" {{ route('tasks.update' ,$task->id) }}">
                    @csrf
                    @method('PUT')
                    <label for='title'>
                        Title
                    </label>
                    <input class="form-control" name=title value="{{ $task->title }}" />
                    @error('title')
                        <p class="text-danger"> {{ $message }}</p>
                    @enderror
                    <label for='description'>
                        Description
                    </label>
                    <textarea class="form-control" name='description'  > {{ $task->description }}</textarea>
                    @error('description')
                        <p class="text-danger"> {{ $message }}</p>
                    @enderror
                    <label for='long_description'>
                        Long Description
                    </label>
                    <textarea class="form-control" name='long_description' rows="5" value="">{{ $task->long_description }}</textarea>
                    @error('long_description')
                        <p class="text-danger"> {{ $message }}</p>
                    @enderror
                    <button class="form-control btn btn-sm btn-primary mt-3" >Update</button>
                </form>
            </div>
        </div>

    </div>



@endsection
