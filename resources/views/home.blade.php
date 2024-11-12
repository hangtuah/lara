<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Reservation App</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('https://via.placeholder.com/1920x600') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
        }
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Vehicle Reserve</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('vehicle.index') }}">Vehicles</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4">Reserve Your Favorite Vehicle</h1>
            <p class="lead">From Malaysian Icons to Japanese Excellence</p>
            <a href="{{ route('vehicle.index') }}" class="btn btn-primary btn-lg">Browse Vehicles</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5">
        <div class="container">
            <div class="row text-center">
                <h2 class="mb-5">Why Choose Us?</h2>
                <div class="col-md-4">
                    <i class="bi bi-car-front display-4"></i>
                    <h5>Wide Selection</h5>
                    <p>Choose from a variety of Malaysian and Japanese vehicles.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-cash display-4"></i>
                    <h5>Affordable Rates</h5>
                    <p>Competitive pricing to suit every budget.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-calendar-check display-4"></i>
                    <h5>Convenient Booking</h5>
                    <p>Simple and fast vehicle reservation process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vehicle Showcase -->
    <section id="vehicles" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Top Vehicles</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Perodua Myvi">
                        <div class="card-body">
                            <h5 class="card-title">Perodua Myvi</h5>
                            <p class="card-text">A Malaysian icon known for its reliability and efficiency.</p>
                            <a href="#" class="btn btn-primary">Reserve Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Proton X50">
                        <div class="card-body">
                            <h5 class="card-title">Proton X50</h5>
                            <p class="card-text">A stylish SUV packed with advanced features.</p>
                            <a href="#" class="btn btn-primary">Reserve Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Toyota Corolla">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Corolla</h5>
                            <p class="card-text">A Japanese classic offering comfort and durability.</p>
                            <a href="#" class="btn btn-primary">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Get in Touch</h2>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Vehicle Reserve. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
