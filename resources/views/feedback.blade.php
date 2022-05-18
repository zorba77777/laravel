@extends('main')
@section('title') Feedback @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('feedbackstore') }}">
            @csrf
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Your name..">

            <label for="comment">Comment</label>
            <input type="text" id="comment" name="comment" placeholder="Your comment..">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
