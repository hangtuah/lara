<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vcls = Vehicle::get();
        //dd($vehicles);

        return view('vehicles.index', compact('vcls'));
    }
}
