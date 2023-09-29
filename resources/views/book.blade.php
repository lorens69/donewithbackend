@extends('layouts.layout')

@section('title', 'Book Service')


@section('content')

{{-- Header --}}
@include('partials._header')

<style>
    .title {
        position: relative;
        font-weight: 900;
    }

    .title::before {
        content: '';
        border-left: solid 10px #FF6000;
        height: 100%;
        margin-right: 10px;
    }

    label {
        color: #786E6E;
    }

    .btn {
        background-color: #FF6000;
    }

    textarea {
        height: 100px;
    }
</style>

<div class="container-fluid"
    style="background-color:#B0B0B0;min-height:89vh;display:flex;align-items:center;justify-content:center">
    <div class="card container rounded-4 w-25 pe-0 ps-0 border-0" style="height:50vh;background-color:#454545">
        <div class="card-header d-flex justify-content-end align-items-center " style="height:50px;color:#FF6000;">
            <i class="fas fa-times" style="color:#FF6000;font-size:30px"></i>

        </div>
        <div class="card-body" style="background-color:#FFE6C7;min-height:50vh;">
            <h2 class="text-center title text-uppercase">
                Book your service now!
            </h2>

            <form class="mt-4">
                <div class="form-group p-2">
                    <label for="socialmedia">Email/Facebook/Messenger :</label>
                    <input class="form-control rounded-0" type="email">
                </div>
                <div class="form-group p-2">
                    <label for="number">Mobile Number:</label>
                    <input class="form-control rounded-0" type="tel" id="contactNumber" name="contactNumber" required>
                </div>
                <div class="form-group p-2">
                    <label for="socialmedia">Details of Services Inquired:</label>
                    <textarea class="form-control rounded-0"></textarea>

                </div>
                <div class="form-group d-flex justify-content-end p-2">

                    <button class="btn text-white p-2 w-25 shadow" type="submit">Submit</button>
                </div>
            </form>

        </div>
    </div>

</div>



<script>



</script>


@endsection
