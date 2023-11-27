<?php

namespace App\Http\Controllers;

use App\Models\matter;
use Illuminate\Http\Request;

class MatterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matters = matter::all();
        return response()->json($matters, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $matter = new matter();
        $matter->name = $request->name;
        $matter->credits = $request->credits;
        $matter->schedule = $request->schedule;
        $matter->save();
        return response()->json($matter, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(matter $matter)
    {
        $matter2 = matter::find($matter->id);
        return response()->json($matter2, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(matter $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, matter $matter)
    {
        $materia = matter::find($matter->id);
        $materia->name = $request->name;
        $materia->credits = $request->credits;
        $materia->schedule = $request->schedule;
        $materia->save();
        return response()->json($materia, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(matter $matter)
    {
        $materia = matter::find($matter->id);
        $materia->delete();
        return response()->json($matter, 200);
    }
}
