<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username|max:255',
            'password' => 'required|min:6',
            'achievement_id' => 'required|exists:achievements,id',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'password' => Hash::make($validatedData['password']),
            'achievement_id' => $validatedData['achievement_id'],
        ]);

        return response()->json($user, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $user = User::where('user_id', $id)->firstOrFail();
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'username' => 'sometimes|required|unique:users,username,' . $id . '|max:255',
            'password' => 'sometimes|nullable|min:6',
            'achievement_id' => 'sometimes|required|exists:achievements,id',
        ]);

        $user = User::where('user_id', $id)->firstOrFail();
        $user->update([
            'username' => $validatedData['username'] ?? $user->username,
            'password' => isset($validatedData['password']) ? Hash::make($validatedData['password']) : $user->password,
            'achievement_id' => $validatedData['achievement_id'] ?? $user->achievement_id,
        ]);

        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::where('user_id', $id)->firstOrFail();
        $user->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
