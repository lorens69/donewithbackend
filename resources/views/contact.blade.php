@extends('layouts.layout')

@section('title', 'Contact Us')

@section('content')

@include('partials._header')
<style>
    

    .card {
        border: 2px solid black;
        margin-right: 10%;
    }

    .form-check {
        display: flex;
        align-items: center;
    }

    .form-check * {
        margin: 15px;
    }
    .service-card .card{
        border: 1px solid #FF6000;
    }
    .car {
        position: relative;
        margin-left: 80%;
            
    }


</style>


    <div class="d-flex flex-row-reverse" > 
        <img src="./img/imageDesign.png" alt="" >
    

    <div class="container-fluid mt-2 p-5" style="width:90%;">
        <h1 class="text-start text-uppercase" name="title">CONNECT WITH US</h1>

    <div class="card-body d-flex justify-content-left align-items-center  mt-4 p-5 row col-lg-12 "> 
        <div class="card " style="background-color: #FFE6C7; max-width:fit-content  " >
            <img src="./img/24_7Contact.png" width="100%" alt="" style="display: mt-5 ">
            <button class="btn w-75 text-white p-2 fw-normal m-4 mt-0" 
            style="background-color: #454545;">Call us now! </button> 
        </div>

        <div class="card " style="background-color: #FFE6C7; max-width:fit-content " >
            <img src="./img/MobileInbox.png" width="100%" alt="" style="display: mt-5 ">
            <button class="btn w-75 text-white p-2 fw-normal m-4 mt-0" 
            style="background-color: #454545;">Book now! </button> 
        </div> 
    </div>

    <div class="car " > 
        <img src="./img/redCar.png" alt="" >
    </div>

    </div>
</div>

@include('partials._footer')
