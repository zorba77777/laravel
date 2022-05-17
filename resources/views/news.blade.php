@extends('main')
@section('title') News @parent @stop
@section('content')
    <p>{{ $news['text'] }} </p>
@endsection


