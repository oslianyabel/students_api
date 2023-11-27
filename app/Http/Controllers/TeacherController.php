<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(teacher::all(), 200);
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
        $teacher = new teacher();
        $teacher->name = $request->name;
        $teacher->last_name = $request->last_name;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->journey = $request->journey;
        $teacher->salary = $request->salary;
        $teacher->save();
        return response()->json($teacher, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(teacher $teacher)
    {
        $teacher2 = teacher::find($teacher->id);
        return response()->json($teacher2, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, teacher $teacher)
    {
        $teacher2 = teacher::find($teacher->id);
        $teacher2->name = $request->name;
        $teacher2->last_name = $request->last_name;
        $teacher2->phone = $request->phone;
        $teacher2->email = $request->email;
        $teacher2->journey = $request->journey;
        $teacher2->salary = $request->salary;
        $teacher2->save();
        return response()->json($teacher2, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(teacher $teacher)
    {
        $teacher2 = teacher::find($teacher->id);
        $teacher2->delete();
        return response()->json($teacher2, 200);
    }
}
