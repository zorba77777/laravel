@extends('main')
@section('title')
    Category News @parent
@stop
@section('content')
    @foreach ($categoryNews as $news)
        <div>
            <a href=" {{route('news.show', ['id' => $news->id])}} ">{{$news->text}} </a>
        </div>
    @endforeach
@endsection
