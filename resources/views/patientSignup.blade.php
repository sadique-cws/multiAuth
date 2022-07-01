@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto">
                <div class="card">
                    <div class="card-header"><h1>Patient (Signup)</h1></div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                    <p class="small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">address</label>
                                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                                @error('address')
                                    <p class="small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">contact</label>
                                <input type="text" name="contact" value="{{old('contact')}}" class="form-control">
                                @error('contact')
                                    <p class="small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                    <p class="small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">password</label>
                                <input type="password" name="password" value="{{old('password')}}" class="form-control">
                                @error('password')
                                    <p class="small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Patient create an account" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection