<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Consultation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        nav{
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 20px;
        }

        #wellcome{
            background-color: #007BFF;
            color: white;
            text-align: center;
            padding: 20px;
        }

       
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('appointment.index')}}">Consultation Booking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" style="text-decoration: none; color: white;">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Booking Form -->
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
               <div class="card shadow p-3">
                <h3 class="text-center">Welcome to Our Hospital</h3>
                <p class="text-center">Book Your Consultation Appointment Online</p>
                <form action="{{route('appointment.store')}}" method="POST">
                     @csrf
                    
                    <div class="mb-3">
                        <input type="hidden" class="form-control" name="p_id" id="id" required value="{{ Auth::user()->id }}">
                        
                        <input type="hidden" class="form-control" name="p_name" id="name" required value="{{ Auth::user()->name }}">

                        <input type="hidden" class="form-control" name="p_phone" id="phone" required value="{{ Auth::user()->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name : {{ Auth::user()->name }}</label>
                        
                    </div>
              
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number : {{ Auth::user()->phone }}</label>
                       
                    </div>

                    <div class="mb-3">
                       <label for="phone" class="form-label">Select Doctor</label>
                       <select id="doctor" name="doctor" class="form-control" required>
                        <option value="Dr. John">Dr. John - Cardiologist</option>
                        <option value="Dr. Mary">Dr. Mary - Neurologist</option>
                        <option value="Dr. James">Dr. James - Orthopedic</option>
                      </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="date" class="form-label">Preferred Date</label>
                        <input type="date" class="form-control" name="date" id="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Notes</label>
                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Any additional information"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Book Appointment</button>
                </form>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
