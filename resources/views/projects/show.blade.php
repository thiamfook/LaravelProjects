{{-- projects/show --}}
@extends('layout')

@section('title', $project->title)

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
    <p>{{ $project->description }}</p>
    <p><a href="/projects/{{ $project->id }}/edit">Edit Project</a></p>

    @if ($project->tasks->count())
        <h3>Tasks:</h3>
        @foreach ($project->tasks as $task)
            <form action="" method="POST">
                <div class="form-check">
                    <input type="checkbox" id="{{ $task->id }}" value="{{ $task->id }}"{{ $task->completed ? ' checked="checked"': '' }}>
                    <label class="form-check-label" for="{{ $task->id }}">
                        {{ $task->description }}
                    </label>
                </div>
            </form>
        @endforeach
    @endif

@endsection