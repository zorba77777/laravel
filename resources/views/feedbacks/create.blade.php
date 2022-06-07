@extends('main')
@section('title') Feedback create @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('feedbacks.store') }}">
            @csrf
            <label for="firstname">First name</label>
            <input type="text" id="firstname" name="firstname">

            <label for="comment">Comment</label>
            <input type="text" id="comment" name="comment">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
