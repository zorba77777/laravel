@extends('main')
@section('title') News edit @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('news.update', ['news' => $news]) }}">
            @csrf
            <label for="category_id">Category ID</label>
            <input type="text" id="category_id" name="category_id" value="{{$news->category_id}}">

            <label for="source_id">Source ID</label>
            <input type="text" id="source_id" name="source_id" value="{{$news->source_id}}">

            <label for="text">Text</label>
            <input type="text" id="text" name="text" value="{{$news->text}}">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
