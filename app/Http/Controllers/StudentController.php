<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\teacher;
use App\Models\matter;
use Illuminate\Http\Request;
use App\Rules\EmailAddress;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(student::all());
    }

    /* public function teachers(student $student)
    {
        return response()->json($student->teachers(), 200);
    } */

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
        $request->validate([
            'email' => ['required', new EmailAddress],
        ]);
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
        $student2 = student::find($student->id);
        return response()->json($student2, 200);
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
        $request->validate([
            'email' => ['required', new EmailAddress],
        ]);
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

    public function search(string $name)
    {
        $student = student::where('name', $name)->get();
        return response()->json($student, 200);
    }

    public function attach_teacher(Request $request)
    {
        $student = student::find($request->student_id);
        $student->teachers()->attach($request->teacher_id);
        return response()->json($student, 200);
    }

    public function detach_teacher(teacher $teacher, student $student)
    {
        $student2 = student::find($student->id);
        $student2->teachers()->detach($teacher->id);
        return response()->json($student2, 200);
    }

    public function teachers(student $student)
    {
        return response()->json($student->teachers, 200);
    }

    public function attach_matter(Request $request)
    {
        $student = student::find($request->student_id);
        $student->matters()->attach($request->matter_id);
        return response()->json($student, 200);
    }

    public function detach_matter(student $student, matter $matter)
    {
        $student2 = student::find($student->id);
        $student2->matters()->detach($matter->id);
        return response()->json($student2, 200);
    }

    public function matters(student $student)
    {
        return response()->json($student->matters, 200);
    }

    public function no_matters(student $student)
    {
        $student2 = student::find($student->id);
        $matters_id = matter::all()->map->only("id")->toArray();
        $matters = matter::all();
        $student_matters_id = $student2->matters->map->only("id")->toArray();
        $ans = [];

        for($i = 0; $i < count($matters_id); $i++) {
            if (!in_array($matters_id[$i], $student_matters_id)) {
                $ans[] = $matters[$i];
            }
        }

        return response()->json($ans, 200);
    }
}
