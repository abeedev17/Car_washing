<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle_types;

class AdminVehicleController extends Controller
{
    //
    public function index()
    {
        $vehicle_list = Vehicle_types::all();
        return view('backend.vehicles.index', compact("vehicle_list"));
    }
}
