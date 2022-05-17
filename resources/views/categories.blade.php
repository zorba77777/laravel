@extends('main')
@section('title')
    Categories @parent
@stop
@section('content')
    @foreach ($categories as $category)
        <div>
            <a href="{{ route('categories.show', ['category' => $category]) }}"> {{$category}} </a>
        </div>
    @endforeach
@endsection
