<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use App\Models\matter;
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

    public function search(string $name)
    {
        $teacher = teacher::where("name", $name)->get();
        return response()->json($teacher, 200);
    }

    public function attach(Request $request)
    {
        $teacher = teacher::find($request->teacher_id);
        $teacher->matters()->attach($request->matter_id);
        return response()->json($teacher, 200);
    }

    public function detach(teacher $teacher, matter $matter)
    {
        $teacher2 = teacher::find($teacher->id);
        $teacher2->matters()->detach($matter->id);
        return response()->json($teacher2, 200);
    }

    public function matters(teacher $teacher)
    {
        return response()->json($teacher->matters, 200);
    }

    public function no_matters(teacher $teacher)
    {
        $teacher2 = teacher::find($teacher->id);
        $matters_id = matter::all()->map->only("id")->toArray();
        $matters = matter::all();
        $student_matters_id = $teacher2->matters->map->only("id")->toArray();
        $ans = [];

        for($i = 0; $i < count($matters_id); $i++) {
            if (!in_array($matters_id[$i], $student_matters_id)) {
                $ans[] = $matters[$i];
            }
        }

        return response()->json($ans, 200);
    }
}
