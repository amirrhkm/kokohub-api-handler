<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function index()
    {
        $enrollments = Enroll::with(['user', 'koko'])->get();
        return response()->json($enrollments);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'koko_id' => 'required|exists:kokos,koko_id',
            'roles' => 'required|string',
            'admin' => 'required|boolean',
        ]);

        $enroll = Enroll::create($validated);
        return response()->json($enroll, 201);
    }

    public function show(Enroll $enroll)
    {
        return response()->json($enroll->load(['user', 'koko']));
    }

    public function update(Request $request, Enroll $enroll)
    {
        $validated = $request->validate([
            'roles' => 'string',
            'admin' => 'boolean',
        ]);

        $enroll->update($validated);
        return response()->json($enroll);
    }

    public function destroy(Enroll $enroll)
    {
        $enroll->delete();
        return response()->json(null, 204);
    }
}
