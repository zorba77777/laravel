@extends('main')
@section('title')
    Feedbacks @parent
@stop
@section('content')

    <table>
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">First name</th>
            <th scope="col">Comment</th>
            <th scope="col">Administrate</th>
        </tr>
        </thead>
        <tbody>
        @forelse($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->id }}</td>
                <td>{{ $feedback->firstname }}</td>
                <td>{{ $feedback->comment }}</td>
                <td>
                    <a href="{{ route('feedbacks.show', ['feedback' => $feedback->id]) }}">Show</a>
                    <a href="{{ route('feedbacks.edit', ['feedback' => $feedback->id]) }}">Edit</a> &nbsp;
                    <form action="{{ route('feedbacks.delete', $feedback->id) }}" method="POST">
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
        <a href="{{ route('feedbacks.create')}}">Create</a>
        </tbody>
    </table>
@endsection

