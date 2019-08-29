{{-- projects/create --}}
@extends('layout')

@section('title', 'Create a New Projects')

@section('content')

    <h1>Create a New Projects</h1>
    <form action="/projects/store" method="POST">
    @csrf
    <div>
        <input name="title" type="text" placeholder="Project Title" class="form-control">
    </div>
    <div>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Project Description" class="form-control"></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-link" onclick="location.href='/projects'">Cancel</button>
    </div>
    </form>
@endsection