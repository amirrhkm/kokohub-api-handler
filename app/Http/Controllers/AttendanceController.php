<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return Attendance::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'koko_id' => 'required|exists:koko,id',
            'status' => 'required|boolean',
        ]);

        return Attendance::create($validatedData);
    }

    public function show($id)
    {
        return Attendance::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'koko_id' => 'required|exists:koko,id',
            'status' => 'required|boolean',
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->update($validatedData);

        return $attendance;
    }

    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();

        return response()->noContent();
    }
}
