@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List Company</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('companies.create') }}">Create New Company Data</a>
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
        <th>Name</th>
        <th>Email</th>
        <th>Logo</th>
        <th>Website</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($companydata as $data)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td><img src="{{asset('/storage/'.$data->logo) }}" width="50" height="50"/></td>
          <td>{{$data->website}}</td>
          <td>
            <form action="{{ route('companies.destroy', $data->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('companies.show',$data->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('companies.edit',$data->id)}}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $companydata->links() !!}
  </div>
@endsection
