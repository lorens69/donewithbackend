<?php

namespace App\Http\Controllers;
use App\Models\Services;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showServices()
    {
    //     $services = [
    // ["serviceName" => "Car Alarm Installation", "servicePrice" => 15000],
    // ["serviceName" => "Car Sound Set Up", "servicePrice" => 12000],
    // ["serviceName" => "Troubleshoot Sound System", "servicePrice" => 8000],
    // ["serviceName" => "Car Tinting", "servicePrice" => 10000],
    // ["serviceName" => "Car Check Ups", "servicePrice" => 5000],
    // ["serviceName" => "Car Alarm Malfunction Rescue", "servicePrice" => 7000],
    // ["serviceName" => "Car Head Light Installations", "servicePrice" => 9000],
    // ["serviceName" => "Car Stereo Installation", "servicePrice" => 11000],
    // ["serviceName" => "Troubleshoot Sound System", "servicePrice" => 8000],
    // ["serviceName" => "Car Alarm Installation", "servicePrice" => 1232134],
    // ["serviceName" => "Car Sound Set Up", "servicePrice" => 123],
    // ["serviceName" => "Troubleshoot Sound System", "servicePrice" => 8000],
    // ["serviceName" => "Car Tinting", "servicePrice" => 3],
    // ["serviceName" => "Car Check Ups", "servicePrice" => 1],
    // ["serviceName" => "Car Alarm Malfunction Rescue", "servicePrice" => 12],
    // ["serviceName" => "Car Head Light Installations", "servicePrice" => 9000],
    // ["serviceName" => "Car Stereo Installation", "servicePrice" => 11000],
    // ["serviceName" => "Troubleshoot Sound System", "servicePrice" => 123213],
    // ["serviceName" => "Car Alarm Installation", "servicePrice" => 15000],
    // ["serviceName" => "Car Sound Set Up", "servicePrice" => 12000],
    // ["serviceName" => "Troubleshoot Sound System", "servicePrice" => 12345123],
    // ["serviceName" => "Car Tinting", "servicePrice" => 10000],
    // ["serviceName" => "Car Check Ups", "servicePrice" => 5000],
    // ["serviceName" => "Car Alarm Malfunction Rescue", "servicePrice" => 7000],
    // ["serviceName" => "Car Head Light Installations", "servicePrice" => 9000],
    // ["serviceName" => "Car Stereo Installation", "servicePrice" => 11000],
    // ["serviceName" => "Troubleshoot Sound System", "servicePrice" => 8000]
    //     ];

    $services = Services::all();

      // Set the number of items per page (e.g., 9 items per page)
    $perPage = 6;

    // Create a new collection from the services array
    $servicesCollection = new Collection($services);

    // Get the current page from the request query string
    $currentPage = Paginator::resolveCurrentPage();

    // Slice the collection to get the items for the current page
    $currentPageItems = $servicesCollection->slice(($currentPage - 1) * $perPage, $perPage);

    // Create a new LengthAwarePaginator instance
    $pagination = new LengthAwarePaginator($currentPageItems, $servicesCollection->count(), $perPage, $currentPage, [
        'path' => Paginator::resolveCurrentPath(),
    ]);

    // Use Paginator::useBootstrap() to apply Bootstrap styling to the pagination links
    Paginator::useBootstrap();

        return view('service', ['services' => $pagination])->with('service', $services);
    }
}
