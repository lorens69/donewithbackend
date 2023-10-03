<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function showGallery()
    {
        $gallerys = [
    ["galleryName" => "Car Alarm Installation", "galleryPrice" => 15000],
    ["galleryName" => "Car Sound Set Up", "galleryPrice" => 12000],
    ["galleryName" => "Troubleshoot Sound System", "galleryPrice" => 8000],
    ["galleryName" => "Car Tinting", "galleryPrice" => 10000],
    ["galleryName" => "Car Check Ups", "galleryPrice" => 5000],
    ["galleryName" => "Car Alarm Malfunction Rescue", "galleryPrice" => 7000],
    ["galleryName" => "Car Head Light Installations", "galleryPrice" => 9000],
    ["galleryName" => "Car Stereo Installation", "galleryPrice" => 11000],
    ["galleryName" => "Troubleshoot Sound System", "galleryPrice" => 8000],
    ["galleryName" => "Car Alarm Installation", "galleryPrice" => 1232134],
    ["galleryName" => "Car Sound Set Up", "galleryPrice" => 123],
    ["galleryName" => "Troubleshoot Sound System", "galleryPrice" => 8000],
    ["galleryName" => "Car Tinting", "galleryPrice" => 3],
    ["galleryName" => "Car Check Ups", "galleryPrice" => 1],
    ["galleryName" => "Car Alarm Malfunction Rescue", "galleryPrice" => 12],
    ["galleryName" => "Car Head Light Installations", "galleryPrice" => 9000],
    ["galleryName" => "Car Stereo Installation", "galleryPrice" => 11000],
    ["galleryName" => "Troubleshoot Sound System", "galleryPrice" => 123213],
    ["galleryName" => "Car Alarm Installation", "galleryPrice" => 15000],
    ["galleryName" => "Car Sound Set Up", "galleryPrice" => 12000],
    ["galleryName" => "Troubleshoot Sound System", "galleryPrice" => 12345123],
    ["galleryName" => "Car Tinting", "galleryPrice" => 10000],
    ["galleryName" => "Car Check Ups", "galleryPrice" => 5000],
    ["galleryName" => "Car Alarm Malfunction Rescue", "galleryPrice" => 7000],
    ["galleryName" => "Car Head Light Installations", "galleryPrice" => 9000],
    ["galleryName" => "Car Stereo Installation", "galleryPrice" => 11000],
    ["galleryName" => "Troubleshoot Sound System", "galleryPrice" => 8000]
        ];

      // Set the number of items per page (e.g., 9 items per page)
    $perPage = 9;

    // Create a new collection from the gallerys array
    $gallerysCollection = new Collection($gallerys);

    // Get the current page from the request query string
    $currentPage = Paginator::resolveCurrentPage();

    // Slice the collection to get the items for the current page
    $currentPageItems = $gallerysCollection->slice(($currentPage - 1) * $perPage, $perPage);

    // Create a new LengthAwarePaginator instance
    $pagination = new LengthAwarePaginator($currentPageItems, $gallerysCollection->count(), $perPage, $currentPage, [
        'path' => Paginator::resolveCurrentPath(),
    ]);

    // Use Paginator::useBootstrap() to apply Bootstrap styling to the pagination links
    Paginator::useBootstrap();

        return view('gallery', ['gallerys' => $pagination]);
    }
}
