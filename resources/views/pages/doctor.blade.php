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
          <span class="text-white">All Doctors</span>
          <h1 class="text-capitalize mb-5 text-lg">Specalized doctors</h1>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- portfolio -->
<section class="section doctors">
   @include('pages.inc.portfolio')
  <div class="container">
    <div class="row">
    	@foreach ($allDoctor as $data)
      <div class="col-lg-3 col-sm-6 col-md-6 my-5">
        	<div class="position-relative doctor-inner-box">
		        <div class="doctor-profile">
		        	<div class="doctor-img">
		               <a href="{{route('pages.doctorSingle', [$data->id, $data->slug])}}"><img src="{{asset('/uploads/image/'.$data->post_img)}}" class="img-fluid w-100"></a>
		             </div>
	             </div>
                <div class="content">
                	<h4 class="mb-0"><a href="{{route('pages.doctorSingle', [$data->id, $data->slug])}}">{{Str::limit($data->title, 30)}}</a></h4>
                	<p>{{Str::limit($data->category_name, 15)}}</p>
              </div> 
	      	</div>
        </div>
        @endforeach
    </div>
  </div>
</section>
<!-- /portfolio -->


<section class="section cta-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="cta-content">
					<div class="divider mb-4"></div>
					<h2 class="mb-5 text-lg">We are pleased to offer you the <span class="title-color">chance to have the healthy</span></h2>
					<a href="{{route('appointment.create')}}" class="btn btn-main-2 btn-round-full">Get appoinment<i class="icofont-simple-right  ml-2"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>

@include('pages.inc.footer')