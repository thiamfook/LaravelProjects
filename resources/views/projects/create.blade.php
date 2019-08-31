{{-- projects/create --}}
@extends('layout')

@section('title', 'Create a New Project')

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <form action="/projects" method="POST">
    @csrf
    <div>
    <input name="title" type="text" placeholder="Project Title" 
        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" 
        value="{{ old('title') }}" required autofocus autocomplete="off">
    </div>
    <div>
        <textarea name="description" id="description" cols="30" rows="10" 
            placeholder="Project Description" 
            class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" 
            required>{{ old('description') }}</textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-link" onclick="location.href='/projects'">Cancel</button>
    </div>
    </form>
@endsection