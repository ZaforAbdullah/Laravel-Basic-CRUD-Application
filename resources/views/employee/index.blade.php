@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List Employee</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('employees.create') }}">Create New Employee Data</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th><b>ID</b></th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company</th>
        <th>Email</th>
        <th>Phone</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($employeedata as $data)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$data->first_name}}</td>
          <td>{{$data->last_name}}</td>
          <td>{{$data->company_id}}</td>
          <td>{{$data->email}}</td>
          <td>{{$data->phone}}</td>
          <td>
            <form action="{{ route('employees.destroy', $data->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('employees.show',$data->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('employees.edit',$data->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $employeedata->links() !!}
  </div>
@endsection
