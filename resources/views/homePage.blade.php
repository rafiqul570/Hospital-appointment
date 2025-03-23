<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Consultation Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            height: 92vh;
            background: url("{{asset('frontend/img/hero.jpg')}}")no-repeat center center/cover;
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .navbar a{
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('appointment.index')}}">ConsultNow</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
                <div>
                    <a href="{{route('login')}}" class=" me-2">Login</a>
                    <a href="{{route('register')}}" class="">Register</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4">Book Your Consultation Online</h1>
            <p class="lead">Get expert advice from professionals anytime, anywhere.</p>
            <a href="{{ route('appointment.create') }}" class="btn btn-primary btn-lg">Book Appointment</a>
        </div>
    </div>

    <!-- Services Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row gy-4">
                <div class="col-md-4" style="overflow: hidden;">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('frontend/img/doctor/doc1.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Get expert advice on various health issues.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center"><img src="{{asset('frontend/img/doctor/doc2.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Professional counseling for mental</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('frontend/img/doctor/doc1.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Book a consultation with medical specialists.</p>
                        </div>
                    </div>
                </div>

                  <div class="col-md-4" style="overflow: hidden;">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('frontend/img/doctor/doc1.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Get expert advice on various health issues.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center"><img src="{{asset('frontend/img/doctor/doc2.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Professional counseling for mental</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('frontend/img/doctor/doc1.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Book a consultation with medical specialists.</p>
                        </div>
                    </div>
                </div>

                  <div class="col-md-4" style="overflow: hidden;">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('frontend/img/doctor/doc1.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Get expert advice on various health issues.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center"><img src="{{asset('frontend/img/doctor/doc2.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Professional counseling for mental</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body text-center">
                            <img src="{{asset('frontend/img/doctor/doc1.jpg')}}" no-repeat center center/cover width="100%">
                            <p class="card-text">Book a consultation with medical specialists.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
