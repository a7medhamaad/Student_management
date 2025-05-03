@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

    <form action="{{ url('payment/' .$payments->id) }}" method="post">
      {{-- {!! csrf_field() !!} --}}
      @csrf
      @method("PATCH")
      <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />
      <label>Enrollment Number</label></br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach($enrollments as $id => $enroll_num)
          <option value="{{ $id }}">{{ $enroll_num }}</option>
          @endforeach
        </select>

      <label>Paid Date</label></br>
      <input type="date" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"></br>


      <label>Amount</label></br>
      <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"></br>

      <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    <a href="{{ url('/report/report1/'. $item->id) }}" title="Edit Pyment"><button class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>Print</button></a>

  </div>
</div>
@stop