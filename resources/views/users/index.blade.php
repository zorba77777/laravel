@extends('main')
@section('title')
    Users @parent
@stop
@section('content')

    <table>
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Is Admin</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_admin }}</td>
                <td>
                    <a href="{{ route('users.show', ['user' => $user]) }}">Show</a>
                    <a href="{{ route('users.edit', ['user' => $user]) }}">Edit</a> &nbsp;
                    <form action="{{ route('users.delete', $user) }}" method="POST">
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
        <a href="{{ route('users.create')}}">Create</a>
        </tbody>
    </table>
@endsection

