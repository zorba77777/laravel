@extends('main')
@section('title')
    Categories @parent
@stop
@section('content')

    <table>
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">Administrate</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.show', ['category' => $category->id]) }}">Show</a>
                    <a href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a> &nbsp;
                    <form action="{{ route('categories.delete', $category->id) }}" method="POST">
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
                            ">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Записей нет</td>
            </tr>
        @endforelse
        <a href="{{ route('categories.create')}}">Create</a>
        </tbody>
    </table>
@endsection

