<?php

namespace App\Http\Controllers;

use App\Models\Koko;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KokoController extends Controller
{
    public function index()
    {
        $kokos = Koko::all();
        return response()->json($kokos);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'koko_id' => 'required|string|max:255|unique:kokos,koko_id',
            'name' => 'required|string|max:255',
            'student_capacity' => 'required|integer|min:0',
            'teacher_capacity' => 'required|integer|min:0',
        ]);

        $koko = Koko::create($validatedData);
        return response()->json($koko, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        $koko = Koko::where('koko_id', $id)->firstOrFail();
        return response()->json($koko);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'student_capacity' => 'sometimes|required|integer|min:0',
            'teacher_capacity' => 'sometimes|required|integer|min:0',
        ]);

        $koko = Koko::where('koko_id', $id)->firstOrFail();
        $koko->update($validatedData);
        return response()->json($koko);
    }

    public function destroy($id)
    {
        $koko = Koko::where('koko_id', $id)->firstOrFail();
        $koko->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
