@php      
  $allDoctor = App\Models\Doctor::latest()->get();   
  $allCategory = App\Models\Category::latest()->get();   
@endphp

@include('pages.inc.header');
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Doctor Details</span>
          <h1 class="text-capitalize mb-5 text-lg">{{$doctor->title}}</h1>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section doctor-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="doctor-img-block">
					<img src="{{asset('/uploads/image/'.$doctor->post_img)}}" class="img-fluid w-100">

					<div class="info-block mt-4">
						<h4 class="mb-0">{{$doctor->title}}</h4>
						<p>{{$doctor->category_name}}</p>

						<ul class="list-inline mt-4 doctor-social-links">
							<li class="list-inline-item"><a href="#!"><i class="icofont-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#!"><i class="icofont-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#!"><i class="icofont-skype"></i></a></li>
							<li class="list-inline-item"><a href="#!"><i class="icofont-linkedin"></i></a></li>
							<li class="list-inline-item"><a href="#!"><i class="icofont-pinterest"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-6">
				<div class="doctor-details mt-4 mt-lg-0">
					<h2 class="text-md">Introducing to myself</h2>
					<div class="divider my-4"></div>
					<p>{{$doctor->long_description}}</p>

					<a href="{{ route('appointment.create') }}" class="btn btn-main-2 btn-icon btn-round-full mt-3">Book appoinment <i class="icofont-simple-right ml-2  "></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section doctor-qualification gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="section-title">
					<h3>Related Doctor</h3>
					<div class="divider my-4"></div>
				</div>
			</div>
		</div>

		<div class="row">
			@foreach ($related_doctor as $data)
			<div class="col-lg-3 col-sm-6 col-md-6 mb-4">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <a href="{{route('pages.doctorSingle', [$data->id, $data->slug])}}"><img src="{{asset('/uploads/image/'.$data->post_img)}}" class="img-fluid w-100"></a>
		             </div>
	             </div>
                <div class="content mt-3">
                	<h4 class="mb-0"><a href="{{route('pages.doctorSingle', [$data->id, $data->slug])}}">{{Str::limit($data->title, 30)}}</a></h4>
                	<p>{{Str::limit($data->category_name, 15)}}</p>
              </div> 
	      	</div>
        </div>
		   @endforeach
		</div>
	</div>
</section>


<section class="section doctor-skills">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h3>My skills</h3>
				<div class="divider my-4"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In architecto voluptatem alias, aspernatur
					voluptatibus corporis quisquam? Consequuntur, ad, doloribus, doloremque voluptatem at consectetur natus eum
					ipsam dolorum iste laudantium tenetur.</p>
			</div>
			<div class="col-lg-4">
				<div class="skill-list">
					<h5 class="mb-4">Expertise area</h5>
					<ul class="list-unstyled department-service">
						<li><i class="icofont-check mr-2"></i>International Drug Database</li>
						<li><i class="icofont-check mr-2"></i>Stretchers and Stretcher Accessories</li>
						<li><i class="icofont-check mr-2"></i>Cushions and Mattresses</li>
						<li><i class="icofont-check mr-2"></i>Cholesterol and lipid tests</li>
						<li><i class="icofont-check mr-2"></i>Critical Care Medicine Specialists</li>
						<li><i class="icofont-check mr-2"></i>Emergency Assistance</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar-widget  gray-bg p-4">
					<h5 class="mb-4">Make Appoinment</h5>

					<ul class="list-unstyled lh-35">
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
						<h3 class="text-color-2">+23-4565-65768</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('pages.inc.footer');