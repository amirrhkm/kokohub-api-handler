<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AttendanceController extends Controller
{
    public function index()
    {
        return response()->json(Attendance::all());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,user_id',
            'koko_id' => 'required|exists:kokos,koko_id',
            'status' => 'required|boolean',
        ]);

        $attendance = Attendance::create($validatedData);

        return response()->json($attendance, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $attendance = Attendance::findOrFail($id);
        return response()->json($attendance);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'sometimes|required|exists:users,user_id',
            'koko_id' => 'sometimes|required|exists:kokos,koko_id',
            'status' => 'sometimes|required|boolean',
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->update($validatedData);

        return response()->json($attendance);
    }

    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
