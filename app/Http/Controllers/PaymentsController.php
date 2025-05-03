<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;

use function PHPUnit\Framework\returnValueMap;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments=Payment::all();
        return View('payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollments=Enrollment::pluck('enroll_num','id');
        return View('payment.create',compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Payment::create($request->all());
        return redirect()->route('payment.index')->with('flash_massage','payment added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payments=Payment::findOrFail($id);
        return View('payment.show',compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments=Enrollment::pluck('enroll_num','id');
        $payments=Payment::FindOrFail($id);
        return View('payment.edit',compact('payments','enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payments=Payment::FindOrFail($id);
       $payments->update($request->all());
       return redirect()->route('payment.index')->with('flash_massage','Payment Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect()->route('payment.index')->with('flash_massage','PAyment Deleted');
    }
}
