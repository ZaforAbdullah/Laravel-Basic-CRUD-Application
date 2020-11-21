@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Company Data</h3>
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

    <form action="{{route('companies.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Name :</strong>
          <input type="text" name="name" class="form-control" placeholder="Name"  required>
        </div>
        <div class="col-md-12">
          <strong>Email :</strong>
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="col-md-12">
          <strong>Logo :</strong>
          <input type="file" name="logo" class="form-control" placeholder="Logo" accept="image/x-png,image/gif,image/jpeg">
        </div>

        <div class="col-md-12">
          <strong>Website :</strong>
          <input type="url" name="website" class="form-control" placeholder="<?php echo(storage_path());?>">
        </div>

        <div class="col-md-12">
          <a href="{{route('companies.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection
