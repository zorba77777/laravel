@extends('main')
@section('title') Category create @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('categories.store') }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
