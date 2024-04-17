@extends('layouts.app')
@section('title', 'Add Task')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST" action=" {{ route('tasks.store') }}">
                    @csrf
                    <label for='title'>
                        Title
                    </label>
                    <input class="form-control" name=title value="{{ old('title') }}" />
                    @error('title')
                        <p class="text-danger"> {{ $message }}</p>
                    @enderror
                    <label for='description'>
                        Description
                    </label>
                    <textarea class="form-control" name='description' value="{{ old('description') }}"></textarea>
                    @error('description')
                        <p class="text-danger"> {{ $message }}</p>
                    @enderror
                    <label for='long_description'>
                        Long Description
                    </label>
                    <textarea class="form-control" name='long_description' rows="5" value="{{ old('long_description') }}"></textarea>
                    @error('long_description')
                        <p class="text-danger"> {{ $message }}</p>
                    @enderror
                    <button class="form-control btn btn-sm btn-primary mt-3" name='submit'>Add Task</button>
                </form>
            </div>
        </div>

    </div>



@endsection
