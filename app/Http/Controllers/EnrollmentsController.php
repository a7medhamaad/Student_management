<?php

namespace App\Http\Controllers;

use App\Models\Batche;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EnrollmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments=Enrollment::all();
        return View('enrollment.index',compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students=Student::pluck('name','id');
        $batches=Batche::pluck('name','id');
        return View('enrollment.create',compact('students','batches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Enrollment::create($request->all());
        return redirect()->route('enrollment.index')->with('flash_massage','enrollment Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments=Enrollment::findOrFail($id);
        $students=Student::pluck('name','id');
        $batches=Batche::pluck('name','id');
        return View('enrollment.show',compact('enrollments','batches','students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students=Student::pluck('name','id');
        $batches=Batche::pluck('name','id');
        $enrollments=Enrollment::findOrFail($id);
        return View('enrollment.edit',compact('enrollments','batches','students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollments=Enrollment::findOrFail($id);
        $enrollments->update($request->all());
        return redirect()->route('enrollment.index')->with('flash_massage','Enrollment Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enrollment::destroy($id);
        return redirect()->route('enrollment.index')->with('flash_message','Enrollment Deleted');
    }
}
