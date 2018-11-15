@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                @if(Auth::user()->hasRole('admin'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                    <div>You Are Admin</div>
                </div>
                @else
                <div class="alert alert-primary" role="alert">
                    <div>You Are User</div>
                </div>
                @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
