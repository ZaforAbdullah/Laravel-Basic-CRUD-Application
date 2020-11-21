@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Company Data</h3>
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

    <form action="{{route('companies.update',$companydata->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">

        <div class="col-md-12">
          <strong>Name :</strong>
          <input type="text" name="name" class="form-control" value="{{$companydata->name}}" required>
        </div>

        <div class="col-md-12">
          <strong>Email :</strong>
          <input type="email" name="email" class="form-control" value="{{$companydata->email}}">
        </div>

        <div class="col-md-12">
          <strong>Logo :</strong>
          <input type="file" name="logo" class="form-control" value="{{$companydata->logo}}">
        </div>

        <div class="col-md-12">
          <strong>Website :</strong>
          <input type="url" name="website" class="form-control" value="{{$companydata->website}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('companies.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
