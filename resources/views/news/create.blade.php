@extends('main')
@section('title') News create @parent @stop
@section('content')
    <div>
        <form method="post" action="{{ route('news.store') }}">
            @csrf

            @if($errors->has('category_id'))
                <div>
                    @foreach($errors->get('category_id') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="category_id">Category ID</label>
            <input type="text" id="category_id" name="category_id">


            @if($errors->has('source_id'))
                <div>
                    @foreach($errors->get('source_id') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="source_id">Source ID</label>
            <input type="text" id="source_id" name="source_id">

            @if($errors->has('text'))
                <div>
                    @foreach($errors->get('text') as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="text">Text</label>
            <input type="text" id="text" name="text">

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
@endsection
