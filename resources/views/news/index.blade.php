@extends('main')
@section('title')
    News @parent
@stop
@section('content')

    <table>
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Category ID</th>
            <th scope="col">Source ID</th>
            <th scope="col">Text</th>
            <th scope="col">Administrate</th>
        </tr>
        </thead>
        <tbody>
        @forelse($news as $news)
            <tr>
                <td>{{ $news->id }}</td>
                <td>{{ $news->category_id }}</td>
                <td>{{ $news->source_id }}</td>
                <td>{{ $news->text }}</td>
                <td>
                    <a href="{{ route('news.show', ['news' => $news->id]) }}">Show</a>
                    <a href="{{ route('news.edit', ['news' => $news->id]) }}">Edit</a> &nbsp;
                    <form action="{{ route('news.delete', $news->id) }}" method="POST">
                        @csrf
                        <button
                            type="submit"
                            style="
                            background: none!important;
                            border: none; padding: 0!important;
                            font-family: arial, sans-serif;
                            color: #069;
                            text-decoration: underline;
                            cursor: pointer;
                            ">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Записей нет</td>
            </tr>
        @endforelse
        <a href="{{ route('news.create')}}">Create</a>
        </tbody>
    </table>
@endsection

