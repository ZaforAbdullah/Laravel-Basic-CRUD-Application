@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Employee</h3>
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

    <form action="{{route('employees.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>First Name :</strong>
          <input type="text" name="first_name" class="form-control" placeholder="Name" required>
        </div>

        <div class="col-md-12">
          <strong>Last Name :</strong>
          <input type="text" name="last_name" class="form-control" placeholder="Name" required>
        </div>

        <div class="col-md-12">
          <strong>Company :</strong>
          <input type="number" name="company_id" class="form-control" placeholder="Company Name" required>
        </div>

        <div class="col-md-12">
          <strong>Email :</strong>
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="col-md-12">
          <strong>Phone :</strong>
          <input type="number" name="phone" class="form-control" placeholder="Phone">
        </div>

        <div class="col-md-12">
          <a href="{{route('employees.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
