@extends('layouts.layout')

@section('title', 'About Us')


@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
        {{-- Header --}}
    @include('partials._header')

    {{-- About Us --}}

    <div class="container-fluid p-0" style="height: 200px;">
        <div class="container d-flex flex-column mt-5 ">
            <div>
                <h1 class="text-center h-100 d-flex flex-column justify-content-center text-uppercase fw-bolder" style="font-size:54px;">About Us</h1>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center ">
                <img src="./img/about/CircleLogo.png" width="200px" height="180px"
                style="position:unset;display:grid; align-items:center;">

            </div>

        </div>
    </div>

    {{-- Our Mission --}}

    <div class="container-fluid h-50 d-flex bg-opacity-75 text-white text-uppercase justify-content-evenly align-items-center "
    style="background-image:url(./img/about/AboutPageBg1.png); margin-top:-35px;">
        <h1 class="m-5" style=" font-size:54px;"><span class="text-black" style="text-decoration: underline orange;">Our</span> Mission</h1>
        <h5 class="text-white m-5 pt-5 lh-base" style="text-align: justify; width: 45%; letter-spacing:1px;">
            At Bertology Car Accessories, our mission is to fuel the automotive passion of enthusiasts by providing unparalleled enhancements for their vehicles. We are dedicated to delivering top-notch products and services that not only elevate the aesthetics of vehicles but also enhance their functionality.
        </h5>
    </div>

    {{-- Our Vision --}}
    <div class="container-fluid d-flex justify-content-between align-items-center "
        style="height: 50vh; background-image:url(./img/about/AboutPageBg2.png);">
        <h5 class="text-white m-5 lh-base" style="text-align: justify; width: 45%;letter-spacing:1px; ">
            Bertology envisions being the go-to destination for discerning automobile enthusiasts, setting the standard for innovation and excellence in the car accessories industry. We aspire to continuously evolve, adapting to the dynamic needs of our tech-savvy audience while remaining true to our commitment to quality and uniqueness.
        </h5>
        <h1 class="text-center m-5 text-white w-50 " style=" font-size:54px;"><span style="text-decoration: underline #FF6000;color: #FF6000;">Our</span> Vision</h1>
    </div>


    {{-- Meet the Founder --}}
    <div class="container-fluid d-flex flex-column" style="height: auto;">
        <h1 class="text-uppercase text-black fw-bolder " style="font-size:54px; letter-spacing:1px; margin-top:73px; margin-left:50px;"><span style="text-decoration: underline #FF6000 5px;">Meet</span> the founder</h1>
        <div class="container-fluid d-flex justify-content-evenly align-items-center "
            style="border: #FF6000 2px solid; border-radius: 10px; height:auto; margin:46px; width:fit-content;">
            <div class="d-flex flex-column justify-content-center" style="height: 98%; padding-top:15px; padding-bottom:15px;">
                <img src="./img/about/founderPicture.png" width="300px" name="Nilbert" style="border-radius: 5px;">
                <label for="Nilbert" class="text-uppercase text-center fw-bolder mt-3" style="color: #FF6000;padding:6px; background-color:white;border-color:black; border-width:2px; border-style:solid; border-radius:5px;">Nilbert M.
                    Umaran / Head technician</label>
            </div>

            <h5 class="me-5 lh-base" style="color: #FF6000;text-align: justify;width: 40%;">Nilbert Umaran, the visionary founder of Bertology, serves as our esteemed Head Technician. His expertise and dedication have been instrumental in shaping Bertology into a premier destination for automotive enthusiasts. With a keen understanding of modern car enthusiasts' needs, Nilbert Umaran is the driving force behind our commitment to excellence and innovation.</h5>
        </div>
    </div>

    {{-- Footer --}}
    @include('partials._footer')

    @endsection
</body>
</html>


