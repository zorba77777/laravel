@extends('main')
@section('title') Category edit @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('categories.update', ['category' => $category]) }}">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{$category->name}}">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
