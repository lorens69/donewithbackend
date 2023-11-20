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

    <style>
        * {
            overflow-x: hidden;

        }

        .requestform {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            margin: 0;
            overflow: hidden;
            margin-top:20px;
            margin-bottom:20px;
        }

        h5 {
            color: #ff0000;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.col-12 label {
            font-size: 16px;
            color: #007bff;
            margin-bottom: 10px;
            display: block;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }
        select{
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 16px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #ff0000;
            /* YouTube red color */
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #cc0000;
            /* Darker shade of red on hover */
        }
    </style>
</head>

<body>
    @include('partials._header')

    <div class="container-fluid px-1 mx-auto">
        <div class="row d-flex justify-content-center">

            @if(Auth::user())

            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="requestform">
                    <h5 class="text-center mb-4">CAR SERVICE REQUEST FORM</h5>
                    <form action="{{ route('userrequest.post') }}" method="POST">

                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">CLIENT INFORMATION</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="contact">Contact: <span class="text-danger">
                                        *</span></label>
                                <input type="tel" id="contact" name="contact" pattern="[0-9]{11}"
                                    title="Please enter a valid 11-digit phone number"
                                    oninput="validateNumericInput(this)" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="address">Current Address: <span
                                        class="text-danger"> *</span></label>
                                <input type="text" id="address" name="current_address" required>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">VEHICLE INFORMATION</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="model">Model of the Car: <span
                                        class="text-danger"> *</span></label>
                                <input type="text" id="model" name="model" required>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="yom">Year of Manufacture: <span
                                        class="text-danger"> *</span></label>
                                <input type="text" id="yom" name="yom" required>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3">MAINTENANCE / SERVICE DETAIL</label>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="service">Service Name: <span
                                        class="text-danger"> *</span></label>
                                <select id="service" name="service" required>
                                    @foreach($services as $service)
                                    <option value="{{ $service->name }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3" for="date">Preferred Date and Time: <span
                                        class="text-danger"> *</span></label>
                                <input type="date" id="date" name="date" required>
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex">
                                <label class="form-control-label px-3" for="special_instructions">Special requests and
                                    instructions:<span class="text-danger"> *</span></label>
                                <input type="text" id="special_instructions" name="special_instructions" required>
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
                        <div class="container">
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
                                @csrf

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex">
                                        <label class="form-control-label px-3">CLIENT INFORMATION</label>
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="name">Full Name: <span
                                                class="text-danger"> *</span></label>
                                        <input type="text" id="name" name="name" required>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="contact">Contact: <span
                                                class="text-danger"> *</span></label>
                                        <input type="tel" id="contact" name="contact" pattern="[0-9]{10}"
                                            title="Please enter a valid 10-digit phone number"
                                            oninput="validateNumericInput(this)" required>
                                    </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="email">Email Address: <span
                                                class="text-danger"> *</span></label>
                                        <input type="email" id="email" name="email" required>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="address">Current Address: <span
                                                class="text-danger"> *</span></label>
                                        <input type="text" id="address" name="current_address" required>
                                    </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex">
                                        <label class="form-control-label px-3">VEHICLE INFORMATION</label>
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="model">Model of the Car: <span
                                                class="text-danger"> *</span></label>
                                        <input type="text" id="model" name="model" required>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="yom">Year of Manufacture: <span
                                                class="text-danger"> *</span></label>
                                        <input type="text" id="yom" name="yom" required>
                                    </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex">
                                        <label class="form-control-label px-3">MAINTENANCE / SERVICE DETAIL</label>
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="service">Service Name: <span
                                                class="text-danger"> *</span></label>
                                        <select id="service" name="service" required>
                                            @foreach($services as $service)
                                            <option value="{{ $service->name }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3" for="date">Preferred Date and Time: <span
                                                class="text-danger"> *</span></label>
                                        <input type="date" id="date" name="date" required>
                                    </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex">
                                        <label class="form-control-label px-3" for="special_instructions">Special
                                            requests and instructions:<span class="text-danger"> *</span></label>
                                        <input type="text" id="special_instructions" name="special_instructions"
                                            required>
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
            @endif

        </div>
    </div>

    @include('sweetalert::alert')

</body>

</html>
<script>
    function validateNumericInput(input) {
        // Remove non-numeric characters using a regular expression
        input.value = input.value.replace(/\D/g, '');
    }
</script>

@include('partials._footer')
@endsection