@extends('layout')

@section('title', 'Contact Us')

@section('content')
    <div>
        <p>
            Please send us your opinion, thank you!
        </p>
        <p>
            You can also find us on Facebook, Twitter, YouTube and Instagram!
        </p>
    </div>
    <form action="/" action="POST">
        @csrf
        <div class="form">
            <div class="mb-3">
                <label for="name">Name</label><input type="text" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="email">Email</label><input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="phone">Phone</label><input type="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="msg">Message</label>
                <textarea name="msg" class="form-control" id="msg" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3"><button type="submit" class="btn btn-primary">Submit</button></div>
        </div>
    </form>
@endsection