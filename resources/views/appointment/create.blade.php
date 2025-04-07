@php
  $allCategory = App\Models\Category::latest()->get();      
  $allDoctor = App\Models\Doctor::latest()->get();   
@endphp

@include('pages.inc.header');
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Book your Seat</span>
          <h1 class="text-capitalize mb-5 text-lg">Appoinment</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Call for an Emergency Service!</span>
              <h2 class="text-color mt-3">+84 789 1256 </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
            <p class="mb-4">Mollitia dicta commodi est recusandae iste, natus eum asperiores corrupti qui velit . Iste dolorum atque similique praesentium soluta.</p>
               <form class="appoinment-form" action="{{route('appointment.store')}}"  method="POST">
                 @csrf
                     <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Department</label>
                      <select class="form-control select2" name="department" data-placeholder="Choose one"
                      data-parsley-class-handler="#slWrapper"
                      data-parsley-errors-container="#slErrorContainer" required>
                      <option disabled selected="">Select Department</option>
                      @foreach ($allCategory as $data)
                      <option value="{{$data->category_name}}">{{$data->category_name}}</option>
                      @endforeach
                      </select>
                    </div>
                    </div><!-- col-12 -->
            
            
                     <div class="col-lg-6">
                        <div class="form-group mg-b-10-force">
                          <label class="form-control-label">Doctor</label>
                          <select class="form-control select2" name="doctor" data-placeholder="Choose one"
                          data-parsley-class-handler="#slWrapper"
                          data-parsley-errors-container="#slErrorContainer" required>
                          <option disabled selected="">Select Doctor</option>
                          @foreach ($allDoctor as $data)
                          <option value="{{$data->title}}">{{$data->title}}</option>
                          @endforeach
                          </select>
                        </div>
                      </div><!-- col-12 -->

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy" :value="old('date')" required autofocus autocomplete="category" >
                                 <x-input-error :messages="$errors->get('date')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="time" class="form-control" placeholder="Time" :value="old('time')" required autofocus autocomplete="category" >
                                 <x-input-error :messages="$errors->get('time')" class="mt-2" />
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" :value="old('name')" required autofocus autocomplete="category" >
                                 <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number" :value="old('phone')" required autofocus autocomplete="category" >
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea :value="old('message')" required autofocus autocomplete="category" >
                         <x-input-error :messages="$errors->get('message')" class="mt-2" />
                    </div>

                    <button type="submit" class="btn btn-main btn-round-full" style="cursor: pointer;">Book Appoinment</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 @include('pages.inc.footer');

