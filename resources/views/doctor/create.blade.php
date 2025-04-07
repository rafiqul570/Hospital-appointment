@extends('admin.layouts.template')
@section('content')

   <div class="card pd-20 pd-sm-40 bg-warning">
      <h2 class="card-body-title mb-5">Add New Doctor</h2>
      <div class="form-layout">
        <form action="{{route('doctor.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row mg-b-25">
          <div class="col-lg-12">
            <div class="form-group">
              <label class="form-control-label">Doctor's Name</label>
              <input class="form-control" type="text" name="title" placeholder="">
            </div>
            <h6 class="col-sm-12 d-flex justify-content-center">
               <x-input-error :messages="$errors->get('title')" class="mt-2 " />
            </h6>
          </div><!-- col-12 -->

          <div class="col-lg-12">
            <div class="form-group">
              <label class="form-control-label">Description</label>
              <textarea  rows="10" class="form-control" name="long_description" placeholder="Text here" id="floatingTextarea"></textarea>
            </div>
            <h6 class="col-sm-12 d-flex justify-content-center">
               <x-input-error :messages="$errors->get('long_description')" class="mt-2 " />
            </h6>
          </div><!-- col-12 -->

          <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
              <label class="form-control-label">Category</label>
              <select class="form-control select2" name="category_id" data-placeholder="Choose one"
              data-parsley-class-handler="#slWrapper"
              data-parsley-errors-container="#slErrorContainer" required>
              <option selected="" disabled="">Select Category</option>
              @foreach ($allCategory as $data)
              <option value="{{$data->id}}">{{$data->category_name}}</option>
              @endforeach
              </select>
            </div>
          </div><!-- col-12 -->

          <div class="col-lg-12">
            <div class="form-group">
              <label class="form-control-label">Image Upload</label>
              <input class="form-control" type="file" name="post_img" value="John Paul" placeholder="Enter firstname">
            </div>
            <h6 class="col-sm-12 d-flex justify-content-center">
               <x-input-error :messages="$errors->get('post_img')" class="mt-2 " />
              </h6>
          </div><!-- col-12 -->
        </div><!-- row -->

        <div class="form-layout-footer">
          <button class="btn btn-info mg-r-5" style="cursor: pointer;">Add New Post</button>
          <button class="btn btn-secondary">Cancel</button>
        </div><!-- form-layout-footer -->
      </form>
      </div><!-- form-layout -->
    </div><!-- card -->


@endsection
