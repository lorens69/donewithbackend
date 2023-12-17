@extends('layouts.layout')
@section('title', 'Booking Request')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Request</title>

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
                <div class="requestform"> <br>
                    <h5 class="text-center mb-4" style="font-size: 30px;color: rgb(54, 49, 49)"> BERTOLOGY CAR SERVICE REQUEST FORM</h5>
                    <form action="{{ route('userrequest.post') }}" method="POST" >

                        @csrf

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"><b style="color: rgb(54, 49, 49)">VEHICLE INFORMATION </b></label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3"for="model"> <b style="color: rgb(54, 49, 49)">Model of the Car: </b>  <span class="text-danger"> *</span></label> <input type="text" id="model" name="model" placeholder="" onblur="validate(5)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3" for="yom">
                                <b style="color: rgb(54, 49, 49)">Year of Manufacture: </b>
                                <span class="text-danger"> *</span>
                            </label>
                            <input
                                type="number"
                                id="yom"
                                name="yom"
                                onblur="validate(6)"
                                max="2025"
                                class="form-control" <!-- Add this class to style the input field -->
                            />
                        </div>

                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"><b style="color: rgb(54, 49, 49)">MAINTENANCE / SERVICE DETAIL</b></label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                {{-- <label class="form-control-label px-3" for="service">Service Name: make this dropdown fls <span class="text-danger"> *</span></label> <input type="text" id="service" name="service" placeholder="" onblur="validate(7)"> --}}
                                <label class="form-control-label px-3" for="service"><b style="color: rgb(54, 49, 49)">Service Name: </b><span
                                    class="text-danger"> *</span></label>
                            <select id="service" name="service" required class="select">
                                @foreach($services as $service)
                                <option value="{{ $service->name }}" > {{ $service->name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="date">
                                    <b style="color: rgb(54, 49, 49)">Preferred Date:</b>
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="date" id="date" name="date" onblur="validate(8)" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"for="specialrequest"><b style="color: rgb(54, 49, 49)">Special requests and instructions: (Optional)</b></label> <input type="text" id="special_instructions" name="special_instructions" placeholder="" onblur="validate(9)">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn-block btn-primary" style="background: rgba(235, 148, 97, 0.829);" ><b style="color: rgb(54, 49, 49)">Submit Request</b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @else
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="requestform">
                    <h5 class="text-center mb-4" style="font-size: 30px;color: rgb(54, 49, 49)"> BERTOLOGY CAR SERVICE REQUEST FORM</h5>
                    <form action="{{ route('request.post') }}" method="POST">

                        @csrf

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"> <b style="color: rgb(54, 49, 49)">CLIENT INFORMATION </b> </label>                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="name"><b style="color: rgb(54, 49, 49)">Full Name: </b><span class="text-danger"> *</span></label><input type="text" id="name" name="name" onblur="validate(1)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="contact">
                                    <b style="color: rgb(54, 49, 49)">Contact: </b>
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="text" id="contact" name="contact" onblur="validate(2)" pattern="[0-9]{11}" title="Please enter a valid 11-digit number" maxlength="11">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="email">
                                    <b style="color: rgb(54, 49, 49)">Email Address: </b>
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="email" id="email" name="email" onblur="validate(3)" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Please enter a valid email address">
                            </div>

                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="address"><b style="color: rgb(54, 49, 49)">Current Address: </b>   <span class="text-danger"> *</span></label><input type="text" id="address" name="current_address" onblur="validate(4)">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"><b style="color: rgb(54, 49, 49)">VEHICLE INFORMATION </b></label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3"for="model"><b style="color: rgb(54, 49, 49)">Model of the Car: </b>  <span class="text-danger"> *</span></label> <input type="text" id="model" name="model" placeholder="" onblur="validate(5)">
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="yom">
                                    <b style="color: rgb(54, 49, 49)">Year of Manufacture: </b>
                                    <span class="text-danger"> *</span>
                                </label>
                                <input
                                    type="number"
                                    id="yom"
                                    name="yom"
                                    onblur="validate(6)"
                                    max="9999"
                                    class="form-control" <!-- Add this class to style the input field -->
                                />
                        </div>

                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"><b style="color: rgb(54, 49, 49)">MAINTENANCE / SERVICE DETAIL</b></label>                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                {{-- <label class="form-control-label px-3" for="service">Service Name: make this dropdown fls <span class="text-danger"> *</span></label> <input type="text" id="service" name="service" placeholder="" onblur="validate(7)"> --}}
                                <label class="form-control-label px-3" for="service"><b style="color: rgb(54, 49, 49)">Service Name: </b><span
                                    class="text-danger"> *</span></label>
                            <select id="service" name="service" required class="select">
                                @foreach($services as $service)
                                <option value="{{ $service->name }}" > {{ $service->name }}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="date">
                                    <b style="color: rgb(54, 49, 49)">Preferred Date:</b>
                                    <span class="text-danger"> *</span>
                                </label>
                                <input type="date" id="date" name="date" onblur="validate(8)" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3"for="specialrequest"><b style="color: rgb(54, 49, 49)">Special requests and instructions: (Optional)</b></label> <input type="text" id="special_instructions" name="special_instructions" placeholder="" onblur="validate(9)">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">
                                <button type="submit" class="btn-block btn-primary" style="background: rgba(235, 148, 97, 0.829);" ><b style="color: rgb(54, 49, 49)">Submit Request</b></button>
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

.requestform input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: rgba(218, 161, 128, 0.829);
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}

.select {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: rgb(235, 147, 97);
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
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
