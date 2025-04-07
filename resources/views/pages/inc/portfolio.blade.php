@php
$categoryAlll = DB::table('categories')->skip(0)->limit(5)->get(); //Laravel Eloquent limit and offset

$categoryAll = App\Models\Category::offset(0)->limit(6)->latest()->get(); //Laravel Model limit and offset

$categoryAll2 = App\Models\Category::offset(6)->limit(4)->latest()->get(); //Laravel Model limit and offset
@endphp

<!-- portfolio -->
<div class="row justify-content-center">
     <div class="col-lg-6 text-center">
        <div class="section-title">
            <h2>Doctors</h2>
            <div class="divider mx-auto"></div>
            <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
        </div>
    </div>
</div>



 <nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
            aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
             <span class="bi bi-three-dots-vertical">See all Doctor</span>
        </button>

        <div class="collapse navbar-collapse" id="navbarmain">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active"><a class="nav-link" href="{{route('pages.doctor')}}">All</a></li>
                 @foreach ($categoryAll as $data)
                <li class="nav-item"><a class="nav-link" href="{{route('pages.categoryPage',[$data->id, $data->slug], )}}">{{Str::limit($data->category_name, 15)}}</a></li>
                 @endforeach

 
                <li class="nav-item dropdown" style="list-style: none;">
                <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Others</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown03">
                  @foreach ($categoryAll2 as $data)
                  <a class="nav-link btn" href="{{route('pages.categoryPage',[$data->id, $data->slug], )}}">
                    
                   {{Str::limit($data->category_name, 15)}}
                  </a>
                  @endforeach
                            
                </ul>
              </li>
                
            </ul>
          </div>
        </div>
      </nav>
