@extends('layout')

@section('title', 'Contact Us')

@section('content')

    <form action="/" action="POST">
        @csrf
        <div class="form">
            <div class="form-group"><label for="name">Name</label><input type="text" class="form-control" id="name"></div>
            <div><button type="submit" class="btn btn-primary">Submit</button></div>
        </div>
    </form>
@endsection