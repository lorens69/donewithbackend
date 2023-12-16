@extends('layouts.layout')
@section('content')
@section('title', 'Login')

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
                <img src="img/car-service.png" width="240px" height="50%">
            </div>

            <div class="welcomeback">

                <div>
                    <h3 style="font-size: 40px;">Login</h3> <br>
                </div>
                <form action="{{ route('login.post') }}" method="POST">

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

<style>
    @media (min-width: 320px) and (max-width: 768px) {
        .logo {
            display: none;
        }
        .Loginpage {
            display: flex;
            justify-content: center;
            top: 50%;
            left: 50%;
            margin-top: 66px;
            margin-bottom: 30px;
            width: 58vw;
            height: 610px;
        }

        .welcomeback {
            width: 300px;
            padding-top:30px;
            padding-bottom:30px;
            height: auto;
        }

        .loginmaincon {
            height: 70%;
        }
    }
</style>

</html>
@include('partials._footer')
@endsection
