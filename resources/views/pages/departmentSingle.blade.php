@include('pages.inc.header')

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Department Details</span>
          <h1 class="text-capitalize mb-5 text-lg">{{$department->title}}</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section department-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="department-img">
					<img src="{{asset('/uploads/image/'.$department->post_img)}}" class="img-fluid w-100">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="department-content mt-5">
					<h4 class="mb-0">{{$department->title}}</h4>
					<div class="divider my-4"></div>
					<p>{{$department->long_description}}</p>


					<h3 class="mt-5 mb-4">Services features</h3>
					<div class="divider my-4"></div>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2"></i>International Drug Database</li>
						<li><i class="icofont-check mr-2"></i>Stretchers and Stretcher Accessories</li>
						<li><i class="icofont-check mr-2"></i>Cushions and Mattresses</li>
						<li><i class="icofont-check mr-2"></i>Cholesterol and lipid tests</li>
						<li><i class="icofont-check mr-2"></i>Critical Care Medicine Specialists</li>
						<li><i class="icofont-check mr-2"></i>Emergency Assistance</li>
					</ul>

					<a href="{{ route('appointment.create') }}" class="btn btn-main-2 btn-round-full">Make an Appoinment<i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="sidebar-widget schedule-widget mt-5">
					<h5 class="mb-4">Time Schedule</h5>

					<ul class="list-unstyled">
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Monday - Friday</span>
					    <span>9:00 - 17:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Saturday</span>
					    <span>9:00 - 16:00</span>
					  </li>
					  <li class="d-flex justify-content-between align-items-center">
					    <span>Sunday</span>
					    <span>Closed</span>
					  </li>
					</ul>

					<div class="sidebar-contatct-info mt-4">
						<p class="mb-0">Need Urgent Help?</p>
						<h3>+23-4565-65768</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@include('pages.inc.footer')