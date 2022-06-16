@extends('main')
@section('title') Feedback edit @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('feedbacks.update', ['feedback' => $feedback]) }}">
            @csrf

            @if($errors->has('firstname'))
                <div>
                    @foreach($errors->get('firstname') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="firstname">First name</label>
            <input type="text" id="firstname" name="firstname" value="{{$feedback->firstname}}">

            @if($errors->has('comment'))
                <div>
                    @foreach($errors->get('comment') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="comment">Comment</label>
            <input type="text" id="comment" name="comment" value="{{$feedback->comment}}">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
