@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollment/' .$enrollments->id) }}" method="post">
        {{-- {!! csrf_field() !!} --}}
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label>enroll_num</label></br>
        
        <input type="text" name="enroll_num" id="enroll_num" value="{{$enrollments->enroll_num}}" class="form-control"></br>
        <label>batche Name</label></br>
        {{-- <input type="text" name="batche_id" id="batche_id" value="{{$enrollments->batche_id}}" class="form-control"></br> --}}
        <select name="batche_id" id="batche_id" class="form-control">
          @foreach ($batches as $id=>$name)
              <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>

        <label>Student Name</label></br>
        {{-- <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}" class="form-control"></br> --}}
        <select name="student_id" id="student_id" class="form-control">
          @foreach ($students as $id=>$name)
              <option value="{{ $id }}">{{ $name }}</option>
          @endforeach
        </select>

        <label>Join date</label></br>
        <input type="date" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop