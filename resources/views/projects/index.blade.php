{{-- projects/index --}}
@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1>Projects</h1>
    <button type="button" class="btn btn-light" onClick="location.href='/projects/create'">Create New Project</button>
    @if ($projects->count())
        <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
        </ul>
    @endif
@endsection