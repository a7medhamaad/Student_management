@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollments Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollment') }}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        <label>enroll_num</label></br>
        <input type="text" name="enroll_num" id="enroll_num" class="form-control"></br>
        
        <label>Batche Name</label></br>
        <select name="batche_id" id="batche_id" class="form-control">
          @foreach ($batches as $id=>$name)
              <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>
        
        <label>Student Name</label></br>
        <select name="student_id" id="student_id" class="form-control">
          @foreach ($students as $id=>$name)
              <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>

        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <label>join Date</label></br>
        <input type="date" name="join_date" id="join_date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop