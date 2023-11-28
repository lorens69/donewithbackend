@extends('layouts.layout')

@section('title', 'Gallery')

@section('content')

@include('partials._header')
<style>
    .pagination>li>a,
    .pagination>li>span {
        padding: 6px 12px;
        text-decoration: none;
        border: 1px solid #ddd;
        color: #333;
        border-radius: 3px;
        background-color: #FFE6C7;
        /* Add the background color for pagination items */
    }

    .pagination .page-item {
        margin: 0px 5px;
    }

    .pagination .page-item:not(.active) .page-link {
        border: none;
    }

    .pagination>.active>a,
    .pagination>.active>span {
        color: black;
        border-color: #FF6000;
    }

    .page-link.active,
    .active>.page-link {
        background-color: #FFE6C7;
        /* Add the background color for pagination items */
        color: black;
    }

    /* Hide the "Next" and "Previous" links */
    .pagination .disabled,
    .pagination .page-link[rel="next"],
    .pagination .page-link[rel="prev"] {
        display: none;
    }
</style>
<div class="containerfluid" style="height:58vh">
    <div class="container-fluid mt-5" style="width:80vw;">
        <h1 class="text-start text-uppercase" name="title">Gallery</h1>
        <label for="title" style="width: 120px;border-bottom: solid 3px #FFA559;"></label>


        <div class="d-flex justify-content-end container">
            <ul class="nav nav-tabs d-none" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="tab" href="#photos" aria-selected="true"
                        role="tab">Photos</a>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#videos" aria-selected="false" tabindex="-1"
                        role="tab">Videos</a>
                </li> -->
                <!-- <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="tab" href="#albums" aria-selected="false" tabindex="-1"
                        role="tab">Albums</a>
                </li> -->
            </ul>
        </div>
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade show active" id="photos" role="tabpanel">
                <div class="service-card d-flex mt-5 justify-content-evenly flex-wrap w-100 row">
                    @foreach($gallerys as $gallery)
                    <div class="card col-lg-3 m-4 p-0">
                        <div
                            class="card-body d-flex justify-content-center align-items-center  flex-column pt-0 ps-0 pe-0 pb-0 ">
                            <img src="{{{asset('upload/'.$gallery->image)}}}" width="100%" height="100%" alt=""
                                style="background-color: black;display: inline-block;max-width: fit-content;">
                            <br>

                            {{$gallery->title}}

                        </div>
                        <div class="card-body">
                            {{$gallery->description}}
                        </div>
                    </div>
                    @endforeach
                </div>
               
            </div>

            <!-- <div class="tab-pane fade" id="videos" role="tabpanel">
                <div class="service-card d-flex mt-5 justify-content-evenly flex-wrap w-100 row">
                    @foreach($gallerys as $gallery)
                    <div class="card col-lg-3 m-4 p-0">
                        <div class="card-body d-flex justify-content-center align-items-center  flex-column p-0">
                            <img src="./img/ShineMasters.png" width="100%" height="100%" alt=""
                                style="background-color: black;display: inline-block;max-width: fit-content;">

                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center">
                    <span style="display: inline-block; border-bottom: 2px solid #FFA559; width: 85%"></span>
                    <div class="d-inline-flex justify-content-end mt-4">
                        {{ $gallerys->links() }}
                    </div>
                </div>
            </div> -->

            <!-- <div class="tab-pane fade" id="albums" role="tabpanel">
                <div class="service-card d-flex mt-5 justify-content-evenly flex-wrap w-100 row">
                @foreach($gallerys as $gallery)
                    <div class="card col-lg-3 m-4 p-0">
                        <div
                            class="card-body d-flex justify-content-center align-items-center  flex-column pt-0 ps-0 pe-0 pb-0 ">
                            <img src="{{{asset('upload/'.$gallery->image)}}}" width="100%" height="100%" alt=""
                                style="background-color: black;display: inline-block;max-width: fit-content;">
                            <br>


                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center">
                    <span style="display: inline-block; border-bottom: 2px solid #FFA559; width: 85%"></span>
                    <div class="d-inline-flex justify-content-end mt-4">
                        {{ $gallerys->links() }}
                    </div>
                </div>
            </div> -->
        </div>

    </div>
</div>


@include('partials._footer')
@endsection