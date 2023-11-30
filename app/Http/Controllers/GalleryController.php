<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function showGallery()
    {
    $gallerys = Gallery::all();
    $perPage = 6;

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
