@php      
  $allDepartment = App\Models\Department::latest()->get();   
@endphp

@include('pages.inc.header');

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">All Department</span>
          <h1 class="text-capitalize mb-5 text-lg">Care Department</h1>

          <!-- <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">All Department</a></li>
          </ul> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section service-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Award winning patient care</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Lets know moreel necessitatibus dolor asperiores illum possimus sint voluptates incidunt molestias nostrum laudantium. Maiores porro cumque quaerat.</p>
				</div>
			</div>
		</div>

		<div class="row">
			@foreach ($allDepartment as $data)
			<div class="col-lg-4 col-md-6 ">
				<div class="department-block mb-5">
					 <a href="{{route('pages.departmentSingle', [$data->id, $data->slug])}}"><img src="{{asset('/uploads/image/'.$data->post_img)}}" class="img-fluid w-100"></a>
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">{{Str::limit($data->title, 15)}}</h4>
						<p class="mb-4">{{Str::limit($data->long_description, 100)}}</p>
						<a href="{{route('pages.departmentSingle', [$data->id, $data->slug])}}" class="read-more">Learn More  <i class="icofont-simple-right ml-2"></i></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@include('pages.inc.footer')