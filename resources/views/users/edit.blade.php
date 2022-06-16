@extends('main')
@section('title') Changing Credentials @parent @stop
@section('content')
    <h1>Changing Credentials</h1>

    <form method="post" action="{{ route('users.update', ['user' => $user]) }}">
        @csrf

        @if($errors->has('name'))
            <div>
                @foreach($errors->get('name') as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <label for="name">Username</label>
        <input type="text" name="name" placeholder="Enter your name" value="{{ $user->name }}" id="name"><br>

        @if($errors->has('email'))
            <div>
                @foreach($errors->get('email') as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <label for="email">User Email</label>
        <input type="text" name="email" placeholder="Enter user email" value="{{ $user->email }}"
               id="email"><br>

        @if($errors->has('is_admin'))
            <div>
                @foreach($errors->get('is_admin') as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <label for="is_admin">Is User an admin</label>
        <select name="is_admin" id="is_admin">
            <option value="0" @if ($user->is_admin === 0) selected="selected" @endif>false</option>
            <option value="1" @if ($user->is_admin === 1) selected="selected" @endif>true</option>
        </select>

        @if($errors->has('password'))
            <div>
                @foreach($errors->get('password') as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        @endif
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter the current password"
               id="password"><br>

        <button type="submit">Edit</button>
    </form>

@endsection

