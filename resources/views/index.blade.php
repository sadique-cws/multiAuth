@extends('base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1 class="display-1">Happy Doctor`s Day</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Patient Authentication</div>
                    <div class="card-body d-flex">
                        <a href="{{route('patientLogin')}}" class="btn btn-success w-50 mx-2 py-3">Patient Login</a>
                        <a href="{{route('patientSignup')}}" class="btn btn-dark w-50 mx-2 py-3">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Doctor Login</div>
                    <div class="card-body d-flex">
                        <a href="{{route('doctorLogin')}}" class="btn btn-danger w-50 py-3 mx-2">Doctor Login</a>
                        <a href="{{route('doctorSignup')}}" class="btn btn-dark w-50 py-3 mx-2">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection