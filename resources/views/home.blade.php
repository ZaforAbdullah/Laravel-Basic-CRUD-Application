@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    </br>
                    </br>
                    <ul>
                        <li> <a href="/companies"> Companies </a> </li>
                        <li> <a href="employees"> Employees </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
