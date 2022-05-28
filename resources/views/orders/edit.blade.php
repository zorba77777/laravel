@extends('main')
@section('title') Order edit @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('orders.update', ['order' => $order]) }}">
            @csrf
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" value="{{$order->firstname}}">

            <label for="phonenumber">Phone number</label>
            <input type="text" id="phonenumber" name="phonenumber" value="{{$order->phonenumber}}">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{$order->email}}">

            <label for="requestedinfo">Requested information</label>
            <input type="text" id="requestedinfo" name="requestedinfo" value="{{$order->requestedinfo}}">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
