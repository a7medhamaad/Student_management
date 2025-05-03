<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers=Teacher::all();
        return View('teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Teacher::create($request->all());
        return redirect()->route('teacher.index')->with('flash_massage','teacher created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teachers=Teacher::find($id);
        return View('teacher.show',compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teachers=Teacher::find($id);
        return View('teacher.edit',compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teachers=Teacher::find($id);
       $teachers->update($request->all());

       return redirect()->route('teacher.index')->with('flah_massage','teacher Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Teacher::destroy($id);
        return redirect()->route('teacher.index')->with('flash_massage','teacher Deleted');
    }
}
