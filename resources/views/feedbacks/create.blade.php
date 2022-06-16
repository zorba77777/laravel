@extends('main')
@section('title') Feedback create @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('feedbacks.store') }}">
            @csrf
            @if($errors->has('firstname'))
                <div>
                    @foreach($errors->get('firstname') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="firstname">First name</label>
            <input type="text" id="firstname" name="firstname">

            @if($errors->has('comment'))
                <div>
                    @foreach($errors->get('comment') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="comment">Comment</label>
            <input type="text" id="comment" name="comment">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
