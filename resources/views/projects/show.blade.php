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
            <form action="/tasks/{{ $task->id }}" method="POST"> 
                @csrf
                @method('PATCH')
                <div class="form-check">
                    <input type="checkbox" name="completed" value="{{ $task->id }}"{!! $task->completed ? ' checked="checked"': '' !!} onChange="this.form.submit()">
                    <label class="form-check-label" for="completed"{!! $task->completed ? ' style="text-decoration: line-through"' : '' !!}>
                        {{ $task->description }}
                    </label>
                </div>
            </form>
        @endforeach
    @endif

    <div class="form">
        <form action="/tasks" method="POST">
            @csrf
            <div>
                <label for="description">New Task</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="New Task" value="{{ old('description') }}"><button class="btn btn-primary">Add Task</button>
            </div>
        </form>
    </div>

@endsection