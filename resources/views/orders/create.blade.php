@extends('main')
@section('title') Order @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('orders.store') }}">
            @csrf
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Your name..">

            <label for="phonenumber">Phone number</label>
            <input type="text" id="phonenumber" name="phonenumber" placeholder="Your phone number..">

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            <label for="requestedinfo">Requested information</label>
            <input type="text" id="requestedinfo" name="requestedinfo" placeholder="Requested information..">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
