@extends('layouts.layout')
@section('title', 'Account Information')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="Css/style.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Log In</title>

</head>
<body>
    @include('partials._header')
    <div class="container profileinfo">

        <div class="d-flex btn-group btn-group-lg bd-highlight" role="group" aria-label="Basic example">
            <button type="button" class="btn forbutton active ">PROFILE</button>
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('showuserreservations')}}'">BOOKING REQUESTS</button>
            <button type="button" class="btn forbutton" onclick="window.location.href='{{route('myOrders')}}'">ORDERS AND PURCHASES</button>
        </div>


        <div class="row show-grid">

            <div class="col-sm-4 d-flex justify-content-end">
                <div class="row d-flex ">
                    <div class="row profilepic d-flex justify-content-center" style="height: fit-content">
                        <img class="propic col-md-12 rounded-circle" src="./img/static_profile.png" alt="">
                        <h1 class="row d-flex justify-content-center">{{ $userdetails[0]->name }}</h1>
                    </div>
                </div>
            </div>

            <div class="proinfo col-sm-6">
                <h2 style="padding-left: 40px; ">Account Data</h2>
                <div class="row show-grid justify-content-center">
                    <div class="col-md-10 col-sm-6">
                    <form action="{{ url('/updateprofile/'.$userdetails[0]->id) }}" method="PUT">
                        @csrf
                        <label>Username:</label>
                        <div class="editinfo p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                                <input type="search" value="{{$userdetails[0]->name}}" name="updatename"aria-describedby="button-addon1" class="form-control border-0 bg-light">
                                <div class="input-group-append">
                                    {{-- <button id="button-addon1" type="submit" class="btn "><i class="bi bi-pencil"></i></i></button> --}}
                                </div>
                            </div>
                        </div>


                        <label>Email Address:</label>
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                              <input type="search" value="{{$userdetails[0]->email}}" name="updateemail" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                              <div class="input-group-append">
                                {{-- <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="bi bi-pencil"></i></i></button> --}}
                              </div>
                            </div>
                        </div>

                        <label>Contact Number:</label>
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                              <input type="search" value="{{$userdetails[0]->contact}}" name="updatecontact" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                              <div class="input-group-append editinfo">
                                {{-- <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="bi bi-pencil"></i></i></button> --}}
                              </div>
                            </div>
                        </div>

                        <label>Current Address:</label>
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                              <input type="search" value="{{$userdetails[0]->current_address}}" name="updateaddress" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                              <div class="input-group-append editinfo">
                                {{-- <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="bi bi-pencil"></i></i></button> --}}
                              </div>
                            </div>
                        </div>
                        <button type="submit"> Update Profile</button>
                    </form>
                    </div>

                </div>
            </div>
            </div>
        </div>

    </div>

</body>

</html>

@include('partials._footer')
@endsection
