<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Add New Vehicle</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Add New Vehicle</h1>
            <!-- Back to Vehicle List Button -->
            <a href="{{ route('vehicle.index') }}" class="btn btn-secondary">Back to Vehicle List</a>
        </div>
        <form action="{{ $edit ? route('vehicle.update', $vehicle->id) : route('vehicle.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Brand -->
    <div class="mb-3">
        <label for="brand" class="form-label">Brand</label>
        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter vehicle brand" value="{{ $edit ? $vehicle->brand : old('brand') }}" required>
    </div>

    <!-- Model -->
    <div class="mb-3">
        <label for="model" class="form-label">Model</label>
        <input type="text" class="form-control" id="model" name="model" placeholder="Enter vehicle model" value="{{ $edit ? $vehicle->model : old('model') }}" required>
    </div>

    <!-- Type -->
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Enter vehicle type (e.g., SUV, Sedan)" value="{{ $edit ? $vehicle->type : old('type') }}" required>
    </div>

    <!-- Year -->
    <div class="mb-3">
        <label for="year" class="form-label">Year</label>
        <input type="number" class="form-control" id="year" name="year" placeholder="Enter manufacture year" min="1900" max="2100" value="{{ $edit ? $vehicle->year : old('year') }}" required>
    </div>

    <!-- License Plate -->
    <div class="mb-3">
        <label for="license_plate" class="form-label">License Plate</label>
        <input type="text" class="form-control" id="license_plate" name="license_plate" placeholder="Enter license plate" value="{{ $edit ? $vehicle->license_plate : old('license_plate') }}" required>
    </div>

    <!-- Engine Capacity -->
    <div class="mb-3">
        <label for="engine_capacity" class="form-label">Engine Capacity (cc)</label>
        <input type="number" class="form-control" id="engine_capacity" name="engine_capacity" placeholder="Enter engine capacity in cc" value="{{ $edit ? $vehicle->engine_capacity : old('engine_capacity') }}" required>
    </div>

    <!-- Fuel Type -->
    <div class="mb-3">
        <label for="fuel_type" class="form-label">Fuel Type</label>
        <select class="form-select" id="fuel_type" name="fuel_type" required>
            <option value="">Select Fuel Type</option>
            <option value="Petrol" {{ $edit && $vehicle->fuel_type === 'Petrol' ? 'selected' : '' }}>Petrol</option>
            <option value="Diesel" {{ $edit && $vehicle->fuel_type === 'Diesel' ? 'selected' : '' }}>Diesel</option>
            <option value="Hybrid" {{ $edit && $vehicle->fuel_type === 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
            <option value="EV" {{ $edit && $vehicle->fuel_type === 'EV' ? 'selected' : '' }}>Electric</option>
        </select>
    </div>

    <!-- Seat Capacity -->
    <div class="mb-3">
        <label for="seat_capacity" class="form-label">Seat Capacity</label>
        <input type="number" class="form-control" id="seat_capacity" name="seat_capacity" placeholder="Enter seat capacity" value="{{ $edit ? $vehicle->seat_capacity : old('seat_capacity') }}" required>
    </div>

    <!-- Status -->
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option value="0" {{ $edit && $vehicle->status === 0 ? 'selected' : '' }}>Available</option>
            <option value="1" {{ $edit && $vehicle->status === 1 ? 'selected' : '' }}>Rented</option>
        </select>
    </div>

    <!-- Price Per Day -->
    <div class="mb-3">
        <label for="price_per_day" class="form-label">Price Per Day (RM)</label>
        <input type="number" class="form-control" id="price_per_day" name="price_per_day" placeholder="Enter rental price per day" step="0.01" value="{{ $edit ? $vehicle->price_per_day : old('price_per_day') }}" required>
    </div>

    <!-- Description -->
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter a description (optional)">{{ $edit ? $vehicle->description : old('description') }}</textarea>
    </div>

    <!-- Picture -->
    <div class="mb-3">
        <label for="picture" class="form-label">Picture</label>
        <input type="file" class="form-control" id="picture" name="picture" accept="image/*">
        @if ($edit && $vehicle->picture)
            <div class="mt-2">
                <img src="{{ asset('storage/' . $vehicle->picture) }}" alt="Vehicle Picture" class="img-thumbnail" width="150">
                <p>Current Picture</p>
            </div>
        @endif
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">{{ $edit ? 'Update Vehicle' : 'Add Vehicle' }}</button>
</form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
