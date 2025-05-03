<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses=Course::all();
        return View('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::create($request->all());
        return redirect()->route('course.index')->with(
            'flash_massage','Course Created'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courses=Course::findOrFail($id);
        return View('course.show',compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses=Course::findOrFail($id);
        return View('course.edit',compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $courses=Course::findOrFail($id);
        $courses->update($request->all());
        return redirect()->route('course.index')->with('flash_massage','Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::destroy($id);
        return redirect()->route('course.index');
    }
}
