<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    public function index()
    {
        $broadcasts = Broadcast::all();
        return response()->json($broadcasts);
    }

    public function store(Request $request)
    {
        $broadcast = Broadcast::create($request->all());
        return response()->json($broadcast, 201);
    }

    public function show($id)
    {
        $broadcast = Broadcast::findOrFail($id);
        return response()->json($broadcast);
    }

    public function update(Request $request, $id)
    {
        $broadcast = Broadcast::findOrFail($id);
        $broadcast->update($request->all());
        return response()->json($broadcast);
    }

    public function destroy($id)
    {
        Broadcast::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
