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

    $services = Services::all();

        return view('service')->with('service', $services);
    }
}
