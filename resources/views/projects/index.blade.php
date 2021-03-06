{{-- projects/index --}}
@extends('layout')

@section('title', 'Projects')

@section('content')

    <button type="button" class="btn btn-outline-primary" onClick="location.href='/projects/create'">Create New Project</button>
    @if ($projects->count())
        <ul>
        @foreach ($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
        </ul>
    @endif

@endsection