@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">

    <title>Log In</title>

</head>
<body>
    @include('partials._header')
    <div class="container-fluid Loginpage">
        <div class="loginmaincon">
            <div class="logo">
                <img src="img/logo.png" width="150px" height="150px" style="margin-top: 33px;">
                <h1 class="login">Log In</h1>
                <img src="img/car-service.png" width="240px" height="50%">
            </div>
    
            <div class="welcomeback">
                {{-- <h1>Welcome Back!</h1>
                <input type="text " placeholder="Email Address">
                <input type="password"  placeholder= "Password"  >
                <button>Sign In</button> --}}
    
                <form action="{{ route('login.post') }}" method="POST">
    
                    {{-- <div class="container">
                        <div class="mt-5">
                            @if ($errors->any())
                                <div class="col-12">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                </div>
                            @endif
    
                            @if (session()->has('error'))
                                <div class="alert alert-danger">{{session('error')}}</div>
                            @endif
    
                            @if (session()->has('success'))
                                <div class="alert alert-success">{{session('success')}}</div>
                            @endif
    
                        </div>
                    </div> --}}
    
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" >
                          </div>
    
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                <a href="register"><h6>Sign Up</h6></a>
                <p>Don't have an account yet? <img src="img/ask.png" height="30px" width="30px" style="transform:rotate(30deg);"> </p>
            </div>
        </div>
        
    </div>

    @include('sweetalert::alert')


</body>

</html>
@include('partials._footer')
@endsection
