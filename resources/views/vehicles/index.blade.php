<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Vehicles</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Vehicle Reservation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('vehicle.index') }}">Vehicles</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>List of Vehicles</h1>
            <!-- Add New Vehicle Button -->
            <a href="{{ route('vehicle.create') }}" class="btn btn-primary">Add New Vehicle</a>
        </div>

        <!-- Success/Error Messages -->
@if (session('success'))
    <div class="alert alert-success" id="alert-message">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" id="alert-message">
        {{ session('error') }}
    </div>
@endif

<script>
    // Automatically fade out the alert message after 5 seconds
    document.addEventListener('DOMContentLoaded', function () {
        const alertMessage = document.getElementById('alert-message');
        if (alertMessage) {
            setTimeout(() => {
                alertMessage.style.transition = 'opacity 0.5s';
                alertMessage.style.opacity = '0';
                setTimeout(() => alertMessage.remove(), 500); // Fully remove it after fading out
            }, 5000);
        }
    });
</script>


        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Year</th>
                    <th>License Plate</th>
                    <th>Engine Capacity</th>
                    <th>Fuel Type</th>
                    <th>Seat Capacity</th>
                    <th>Status</th>
                    <th>Price/Day</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vcls as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->brand }}</td>
                        <td>{{ $data->model }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{ $data->year }}</td>
                        <td>{{ $data->license_plate }}</td>
                        <td>{{ $data->engine_capacity }}</td>
                        <td>{{ $data->fuel_type }}</td>
                        <td>{{ $data->seat_capacity }}</td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->price_per_day }}</td>
                        <td>{{ $data->description }}</td>
                        <td>
                            <!-- Delete Button -->
                             <a href="{{ route('vehicle.destroy', $data->id) }}"class="btn btn-danger btn-sm">Delete</a>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2024 Vehicle Reservation. All Rights Reserved.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
