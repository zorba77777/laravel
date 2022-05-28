@extends('main')
@section('title')
    Orders @parent
@stop
@section('content')

    <table>
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">First name</th>
            <th scope="col">Phone number</th>
            <th scope="col">Email</th>
            <th scope="col">Requested</th>
            <th scope="col">Administrate</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->firstname }}</td>
                <td>{{ $order->phonenumber }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->requestedinfo }}</td>
                <td>
                    <a href="{{ route('orders.show', ['order' => $order->id]) }}">Show</a>
                    <a href="{{ route('orders.edit', ['order' => $order->id]) }}">Edit</a> &nbsp;
                    <form action="{{ route('orders.delete', $order->id) }}" method="POST">
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
        <a href="{{ route('orders.create')}}">Create</a>
        </tbody>
    </table>
@endsection

