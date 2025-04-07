
@include('pages.inc.header');

<body id="top">

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span><h1 class="text-capitalize mb-5 text-lg">{{$allCategory->category_name}}</h1></span>
          <p class="text-centr">{{$allCategory->short_description}}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section service-2">
	<div class="container">
		<div class="row">
			@foreach ($allPost as $data)
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5">
					<a href="{{route('pages.pageSingle', [$data->id, $data->slug])}}"><img src="{{asset('/uploads/image/'.$data->post_img)}}"></a>
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">{{Str::limit($data->title, 30)}}</h4>
						<p class="mb-4">{{Str::limit($data->long_description, 100)}}</p>
					</div>
				</div>
			</div>
		 @endforeach 

		</div>
	</div>
</section>
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

 @include('pages.inc.footer');