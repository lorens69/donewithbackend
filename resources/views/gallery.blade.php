@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.css">
    <title>Gallery</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 80vw;
            margin: 0 auto;
        }

        .underline {
            width: 120px;
            border-bottom: solid 3px #FFA559;
        }

        .service-card {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card {
            width: calc(33.3333% - 20px); /* Adjust the width for larger screens */
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            max-width: 100%;
            height: auto;
            max-height: 350px; /* Adjust the maximum height as needed */
            object-fit: cover; /* Maintain aspect ratio and cover the entire container */
        }

        .card-body {
            padding: 10px;
        }

        .back-button {
            margin-top: 20px;
        }

        @media only screen and (max-width: 767px) {
        .service-card {
            justify-content: center;
        }

        .card {
            width: 100%;
            margin: 10px 0; /* Adjust margin as needed */
        }
        .service-card {
            padding: 20px;
        }
    }
    </style>
</head>

<body>
    @include('partials._header')

    <div class="container mt-5">
        <h1 class="text-start text-uppercase" name="title">Gallery</h1>
        <label for="title" class="underline"></label>
    </div>

    @if(!$gallerys)
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade show active" id="photos" role="tabpanel">
            <div class="service-card">
                @foreach($gallerys as $gallery)
                <div class="card">
                    <a href="{{ asset('upload/'.$gallery->image) }}" data-gallery="gallery" class="js-baguettebox">
                        <img class="card-img-top" src="{{ asset('upload/'.$gallery->image) }}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$gallery->title}}</h5>
                        <p class="card-text">{{$gallery->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @else
        <div class="d-flex justify-content-center">
            <img class="img-thumbnail" src="./img/illustrations/nophotos.png" alt="fiksur" style="width: 300px; height:300px; margin-bottom:40px; border:none;">
        </div>
    @endif

    <div class="d-flex align-items-center ">
        <span style="display: inline-block; border-bottom:2px solid #FFA559;width:85%;"> </span>
        <div class="d-inline-flex justify-content-end mt-4">
            {{ $gallerys->links() }}
        </div>
    </div>

    @include('partials._footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js" defer></script>
    <script>
        baguetteBox.run('.js-baguettebox', {
            buttons: true,
        });

        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>

@endsection
