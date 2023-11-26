<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(student::all());
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
        $student = new student();
        $student->name = $request->name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->credits = $request->credits;
        $student->semester = $request->semester;
        $student->average = $request->average;
        $student->save();
        return response()->json($student, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $student2 = student::find($student->id);
        $student2->name = $request->name;
        $student2->last_name = $request->last_name;
        $student2->email = $request->email;
        $student2->credits = $request->credits;
        $student2->semester = $request->semester;
        $student2->average = $request->average;
        $student2->save();
        return response()->json($student, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student2 = student::find($student->id);
        $student2->delete();
        return response()->json($student2, 200);
    }
}
