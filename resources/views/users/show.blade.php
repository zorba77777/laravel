@extends('main')
@section('title')
    Users @parent
@stop
@section('content')
    <p>{{$user->id}}</p>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <p>{{$user->is_admin}}</p>
@endsection

