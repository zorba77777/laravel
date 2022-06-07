<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all()
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, User::rules());
        $user->fill([
            'name' => $request->post('name'),
            'password' => Hash::make($request->post('newPassword')),
            'email' => $request->post('email'),
            'is_admin' => $request->post('is_admin')
        ]);
        $user->save();
        return redirect()->route('users.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, User::rules());
        $paramsToInsert = $request->except(['_token']);
        User::create($paramsToInsert);
        return redirect()->route('users.index');
    }

    public function delete(User $user)
    {
        $user->forceDelete();
        return redirect()->route('users.index');
    }
}
