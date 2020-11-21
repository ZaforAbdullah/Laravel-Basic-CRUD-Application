@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Employee Data</h3>
        <hr>
      </div>
    </div>
    <div class="row">

      <div class="col-md-12">
        <div class="form-group">
          <strong>First Name : </strong> {{$employeedata->first_name}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Last Name : </strong> {{$employeedata->last_name}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Company : </strong> {{$employeedata->company_id}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Email : </strong> {{$employeedata->email}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Phone : </strong> {{$employeedata->phone}}
        </div>
      </div>

      <div class="col-md-12">
        <a href="{{route('employees.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
      
    </div>
  </div>
@endsection
