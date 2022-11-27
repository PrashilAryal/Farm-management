@extends('layout.main')

@section('content')
<div id="formLayout" class="box shadow p-4">
    <h1 class="d-flex justify-content-center">Register</h1>
    <div class="d-flex justify-content-center">
        <form method="post" action="{{route('registerUser')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('name')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('email')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    id="exampleInputPassword1">
                @error('password')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <div class="buttonContainer">
                <button type="submit" class="button">Register</button>
            </div>
            <div class="mb-3 formLink">Already have an account!
                <a href="{{route('login')}}">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection