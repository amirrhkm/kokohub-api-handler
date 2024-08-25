<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        return Achievement::all();
    }

    public function show($id)
    {
        return Achievement::findOrFail($id);
    }

    public function store(Request $request)
    {
        $achievement = Achievement::create($request->all());
        return response()->json($achievement, 201);
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->update($request->all());
        return response()->json($achievement, 200);
    }

    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();
        return response()->json(null, 204);
    }
}
