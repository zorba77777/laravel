@extends('main')
@section('title') Order @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('orders.store') }}">
            @csrf

            @if($errors->has('firstname'))
                <div>
                    @foreach($errors->get('firstname') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Your name..">

            @if($errors->has('phonenumber'))
                <div>
                    @foreach($errors->get('phonenumber') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="phonenumber">Phone number</label>
            <input type="text" id="phonenumber" name="phonenumber" placeholder="Your phone number..">

            @if($errors->has('email'))
                <div>
                    @foreach($errors->get('email') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email..">

            @if($errors->has('requestedinfo'))
                <div>
                    @foreach($errors->get('requestedinfo') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="requestedinfo">Requested information</label>
            <input type="text" id="requestedinfo" name="requestedinfo" placeholder="Requested information..">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
