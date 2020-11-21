@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Employee Data</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('employees.update',$employeedata->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">

        <div class="col-md-12">
          <strong>First Name :</strong>
          <input type="text" name="first_name" class="form-control" value="{{$employeedata->first_name}}" required>
        </div>

        <div class="col-md-12">
          <strong>Last Name :</strong>
          <input type="text" name="last_name" class="form-control" value="{{$employeedata->last_name}}" required>
        </div>

        <div class="col-md-12">
          <strong>Company :</strong>
          <input type="text" name="company" class="form-control" value="{{$employeedata->company}}"required>
        </div>

        <div class="col-md-12">
          <strong>Email :</strong>
          <input type="text" name="email" class="form-control" value="{{$employeedata->email}}">
        </div>

        <div class="col-md-12">
          <strong>Phone :</strong>
          <input type="text" name="phone" class="form-control" value="{{$employeedata->phone}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('employees.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
