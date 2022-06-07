@extends('main')
@section('title')
    Feedback @parent
@stop
@section('content')
    <p>{{$feedback->id}}</p>
    <p>{{$feedback->firstname}}</p>
    <p>{{$feedback->comment}}</p>
@endsection

