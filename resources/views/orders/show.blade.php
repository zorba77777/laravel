@extends('main')
@section('title')
    Orders @parent
@stop
@section('content')
    <p>{{$order->id}}</p>
    <p>{{$order->firstname}}</p>
    <p>{{$order->phonenumber}}</p>
    <p>{{$order->email}}</p>
    <p>{{$order->requestedinfo}}</p>
@endsection

