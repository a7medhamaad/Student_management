<?php

namespace App\Http\Controllers;

use App\Models\Batche;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches=Batche::all();
        return View('batche.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses=Course::pluck('name','id');
        return View('batche.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Batche::create($request->all());
        return redirect()->route('batche.index')->with('flash_massage','batches Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches=Batche::findOrFail($id);
        return View('batche.show',compact('batches'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches=Batche::findOrFail($id);
        $courses=Course::pluck('name','id');
       return View('batche.edit',compact('batches','courses')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batches=Batche::findOrFail($id);
        $batches->update($request->all());
        return redirect()->route('student.index')->with('flash_massage','Batches Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batche::destroy($id);
        return redirect()->route('student.index')->with('dlash_massage','BAtches Deleted');
    }
}
