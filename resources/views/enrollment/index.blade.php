@extends('layout')
@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h2>ENrollments Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/enrollment/create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br />
            <br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nameenroll_num</th>
                            <th>Batche Name</th>
                            <th>Student Name</th>
                            <th>JOin Date</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enrollments as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->enroll_num }}</td>
                            <td>{{ $item->batche->name }}</td>
                            <td>{{ $item->student->name }}</td>
                            <td>{{ $item->join_date }}</td>
                            <td>{{ $item->fee }}</td>

                            <td>
                                <a href="{{ url('/enrollment/' . $item->id) }}" title="View Batche"><button
                                        class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                        View</button></a>
                                <a href="{{ url('/enrollment/' . $item->id . '/edit') }}" title="Edit Batche"><button
                                        class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                            aria-hidden="true"></i> Edit</button></a>

                                <form method="POST" action="{{ url('/enrollment' . '/' . $item->id) }}"
                                    accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Batche"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

     
    </div>

</div>
@endsection