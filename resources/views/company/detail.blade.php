@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Company Data</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name : </strong> {{$companydata->name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Email : </strong> {{$companydata->email}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Logo : </strong> {{$companydata->logo}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Website : </strong> {{$companydata->website}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('companies.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
