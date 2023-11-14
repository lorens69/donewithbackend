@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">   

    <title>Register</title>

</head>
<body>
    @include('partials._header')
    <div class="container-fluid Registerpage" style="width: 60%;">
        <div class="registermaincon">
            <div class="registerlogo">
                <img src="img/logo.png" width="190px" height="150px" style="margin-top: 33px;">
                <h1 class="login">Register</h1>
                <img src="img/car-service.png" width="240px" height="250px">
            </div>
    
            <div class="welcomeback">
                {{-- <h1>Create Your Account! </h1>
                <input type="text " placeholder="Full Name">
                <input type="text " placeholder="Email Address">
                <input type="text"  placeholder= "Contact Number " >
                <input type="text"  placeholder= "Current Address" >
                <input type="text " placeholder="Username (for login)">
                <input type="password"  placeholder= "Password " >
                <input type="password"  placeholder= "Check Password"  >
                <button>Sign Up</button> --}}
    
                <form action="{{ route('register.post') }}" method="POST">
    
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
                        <label >Full Name</label>
                        <input type="text" class="form-control" name="name">
                      </div>
    
                    <div class="form-group">
                      <label>Email address</label>
                      <input type="email" class="form-control" name="email" >
                    </div>
    
                      <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" name="password">
                      </div>
    
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
    
    
                <a href="login">
                    <h6>Sign In</h6>
                </a>
                <p>Don't have an account yet? <img src="img/ask.png" height="30px" width="30px" style="transform:rotate(30deg);"> </p>
            </div>
        </div>

        </div>
        
    @include('sweetalert::alert')
    
</body>

   

</html>
@include('partials._footer')
@endsection
