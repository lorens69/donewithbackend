@extends('layouts.layout')

@section('title', 'Services')

@section('content')

@include('partials._header')
<style>

.pagination > li > a,
.pagination > li > span {
    padding: 6px 12px;
    text-decoration: none;
    border: 1px solid #ddd;
    color: #333;
    border-radius: 3px;
    background-color: #FFE6C7; /* Add the background color for pagination items */
}
.pagination .page-item{
    margin: 0px 5px;
}
.pagination .page-item:not(.active) .page-link{
border: none;
}

.pagination > .active > a,
.pagination > .active > span {
    color: black;
    border-color: #FF6000;
}
.page-link.active, .active > .page-link {
    background-color: #FFE6C7; /* Add the background color for pagination items */
    color: black;
}

/* Hide the "Next" and "Previous" links */
.pagination .disabled,
.pagination .page-link[rel="next"],
.pagination .page-link[rel="prev"] {
    display: none;
}


</style>
<div class="container-fluid mt-5" style="width:80vw;min-height:53vh;">
    <h1 class="text-start text-uppercase" name="title">Car Services</h1>
    <label for="title" style="width: 120px;border-bottom: solid 3px #FFA559;"></label>

    <div class="container-fluid w-100 d-flex justify-content-end mt-2">
        <input type="text" class="w-25" style="border:1px solid #FF6000">
        <button class="btn btn-sm text-uppercase text-white" style="background-color:#FF6000;padding:10px;width: 20%;border-radius: 0;">Search Service</button>
    </div>

    <div class="service-card d-flex  mt-5 justify-content-evenly flex-wrap  w-100 row">
        @foreach($services as $service)
        <div class="card col-lg-3 m-4 p-0">
            <div class="card-body d-flex justify-content-center align-items-center  flex-column pt-0 ps-0 pe-0 ">
                <img src="{{asset('upload/'.$service->image)}}" width="100%" height="100%"  alt="NO PICTURE YET" style="display: inline-block;max-width: fit-content;">
                <br>
                <h5 class="card-title ">{{ $service['name'] }}</h5>
                <p class="card-text">Price: Php {{ number_format($service['price']) }}</p>

                <button class="btn w-75 text-white p-3 fw-bold m-2" style="background-color: #FF6000;" onclick="window.location.href='{{route('requestform')}}'">BOOK APPOINTMENT</button>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex align-items-center ">
        <span style="display: inline-block; border-bottom:2px solid #FFA559;width:85%"> </span>
    <div class="d-inline-flex justify-content-end mt-4">
        {{ $services->links() }}
    </div>
    </div>
   

</div> <br><br>
@include('partials._footer')
@endsection
