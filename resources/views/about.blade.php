@extends('layouts.layout')

@section('title', 'About Us')


@section('content')




{{-- Header --}}
@include('partials._header')

{{-- About Us --}}

<div class="container-fluid p-0" style="height: 100vh;">
    <div class="container h-50 position-relative  ">
        <h1 class="text-center h-100 d-flex flex-column justify-content-center text-uppercase fw-bolder ">About Us
        </h1>
        <img src="./img/bertologylogo.png" class="bg-black d-block  m-auto rounded-circle " width="150px" height="150px"
            style="position: absolute;top: 65%;left: 43%;">
    </div>





    {{-- Our Mission --}}

    <div class="container-fluid h-50 d-flex bg-opacity-75 text-white text-uppercase justify-content-between    align-items-center "
        style="background-color: #FF6000;">
        <h1 class="m-5"><span class="text-black" style="text-decoration: underline orange;">Our </span>Mission</h1>
        <h5 class="text-white m-5" style="text-align: justify; width: 45%;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.
        </h5>
    </div>
</div>


{{-- Our Vision --}}
<div class="container-fluid d-flex justify-content-between align-items-center "
    style="height: 50vh; background-color: #000000;">
    <h5 class="text-white m-5" style="text-align: justify; width: 45%;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
        nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
        anim id est laborum.
    </h5>
    <h1 class="text-center m-5 text-white w-50 "><span style="text-decoration: underline #FF6000;color: #FF6000;">Our
        </span>Vision</h1>
</div>


{{-- Meet the Founder --}}
<div class="container-fluid d-flex flex-column" style="height: 100vh;">
    <h1 class="text-uppercase m-5 mb-0 text-black fw-bolder "><span style="text-decoration: underline #FF6000 5px;">Meet
        </span>the founder</h1>
    <div class="container m-auto h-75 d-flex justify-content-between align-items-center "
        style="border: #FF6000 2px solid; border-radius: 10px;">
        <div class="d-flex flex-column justify-content-center " style="height: 98%;">
            <img src="./img/sample.png" height="90%" name="Nilbert">
            <label for="Nilbert" class="text-uppercase text-center fw-bolder mt-3" style="color: #FF6000;"> NIlbert M.
                Umaran / Head technician</label>
        </div>
        <h5 class="me-5" style="color: #FF6000;text-align: justify;width: 40%;">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
    </div>
</div>

{{-- Footer --}}
@include('partials._footer')

@endsection