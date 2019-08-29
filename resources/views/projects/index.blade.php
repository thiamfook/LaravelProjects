{{-- projects/index --}}
@extends('layout')

@section('title', 'Projects')

@section('content')

    <h1>Projects</h1>
    @if ($projects->count())
        <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
        </ul>
    @endif
@endsection