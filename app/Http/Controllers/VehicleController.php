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
    public function create()
    {
        return view('vehicles.create');
    }
    public function store(Request $request)
    {
        Vehicle::insert([
            'brand' => $request->brand,
            'model' => $request->model,
            'type' => $request->type,
            'year' => $request->year,
            'license_plate' => $request->license_plate,
            'engine_capacity' => $request->engine_capacity,
            'fuel_type' => $request->fuel_type,
            'seat_capacity' => $request->seat_capacity,
            'status' => $request->status,
            'price_per_day' => $request->price_per_day,
            'description' => $request->description,
            'picture' => $request->picture, // If a file upload, handle and store the path first
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('vehicle.index')->with('success', 'Vehicle added successfully!');
    }
}
