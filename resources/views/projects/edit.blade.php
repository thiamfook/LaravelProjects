{{-- projects/edit --}}
@extends('layout')

@section('title', 'Edit Project')

@section('content')

    <form action="/projects/{{$project->id}}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <input name="title" type="text" placeholder="Project Title" class="form-control" value="{{$project->title}}" required autofocus autocomplete="off">
    </div>
    <div>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Project Description" class="form-control" required>{{$project->description}}</textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-link" onclick="location.href='/projects'">Cancel</button>
    </div>
    </form>
    <form action="/projects/{{ $project->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection