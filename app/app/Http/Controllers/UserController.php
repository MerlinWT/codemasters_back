<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function store(UserRequest $request)
    {
        return User::create($request->validated());
    }

    public function show(User $user)
    {
        return $user;
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->except(['id']));
        $user->save();
        return response()->json($user);
    }

    public function destroy(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        if($user->delete()) return response(null, 204);
    }

}
