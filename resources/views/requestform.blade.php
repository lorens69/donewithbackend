@extends('layouts.layout')
@section('title', 'Shopping Cart')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="Js/requestform.js"></script>
</head>
<body>
    @include('partials._header')

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">

            @if(Auth::user())

            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="requestform">
                    <h5 class="text-center mb-4">CAR SERVICE REQUEST FORM</h5>
                    <form action="{{ route('userrequest.post') }}" method="POST" >

                        @csrf

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">CLIENT INFORMATION</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="contact">Contact: <span class="text-danger"> *</span></label><input type="text" id="contact" name="contact" onblur="validate(2)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="address">Current Address:  <span class="text-danger"> *</span></label><input type="text" id="address" name="current_address" onblur="validate(4)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">VEHICLE INFORMATION</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3"for="model">Model of the Car:  <span class="text-danger"> *</span></label> <input type="text" id="model" name="model" placeholder="" onblur="validate(5)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="yom">Year of Manufacture:  <span class="text-danger"> *</span></label><input type="text" id="yom" name="yom" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">MAINTENANCE / SERVICE DETAIL</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="service">Service Name: make this dropdown fls <span class="text-danger"> *</span></label> <input type="text" id="service" name="service" placeholder="" onblur="validate(7)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="date">Preferred Date and Time:  <span class="text-danger"> *</span></label><input type="date" id="date" name="date" onblur="validate(8)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"for="specialrequest">Special requests and instructions:<span class="text-danger"> *</span></label> <input type="text" id="special_instructions" name="special_instructions" placeholder="" onblur="validate(9)">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn-block btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @else
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="requestform">
                    <h5 class="text-center mb-4">CAR SERVICE REQUEST FORM</h5>
                    <form action="{{ route('request.post') }}" method="POST">
                        @csrf

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">CLIENT INFORMATION</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="name">Full Name: <span class="text-danger"> *</span></label><input type="text" id="name" name="name" onblur="validate(1)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="contact">Contact: <span class="text-danger"> *</span></label><input type="text" id="contact" name="contact" onblur="validate(2)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="email">Email Address: <span class="text-danger"> *</span></label><input type="text" id="email" name="email" onblur="validate(3)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="address">Current Address:  <span class="text-danger"> *</span></label><input type="text" id="address" name="current_address" onblur="validate(4)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">VEHICLE INFORMATION</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3"for="model">Model of the Car:  <span class="text-danger"> *</span></label> <input type="text" id="model" name="model" placeholder="" onblur="validate(5)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="yom">Year of Manufacture:  <span class="text-danger"> *</span></label><input type="text" id="yom" name="yom" onblur="validate(6)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">MAINTENANCE / SERVICE DETAIL</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="service">Service Name: make this dropdown fls <span class="text-danger"> *</span></label> <input type="text" id="service" name="service" placeholder="" onblur="validate(7)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="date">Preferred Date and Time:  <span class="text-danger"> *</span></label><input type="date" id="date" name="date" onblur="validate(8)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"for="specialrequest">Special requests and instructions:<span class="text-danger"> *</span></label> <input type="text" id="special_instructions" name="special_instructions" placeholder="" onblur="validate(9)">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>

    @include('sweetalert::alert')

</body>

<style>
    .requestform {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px;
        text-align: center;
        margin: 0;
        overflow: hidden;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    /* Add the following styles for a floating effect */
    .requestform {
        transition: box-shadow 0.5s, transform 0.5s;
    }

    .requestform:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: translateY(-4px);
    }

    /* Default button styles */
button {
    padding: 12px 24px; /* Adjust padding as needed */
    font-size: 16px; /* Adjust font size as needed */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}


/* Responsive styles for smaller screens */
@media (max-width: 768px) {
    button {
        padding: 10px 20px; /* Adjust padding for smaller screens */
        font-size: 14px; /* Adjust font size for smaller screens */
    }
}


</style>

</html>
@include('partials._footer')
@endsection
