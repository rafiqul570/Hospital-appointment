@extends('admin.layouts.template')
@section('content')

<div class="card pd-20 pd-sm-40">
  <h6 class="card-body-title mb-5">Add New Category</h6>
  <div class="form-layout">
    <div class="row mg-b-25">
      <div class="col-lg-12">
        <form action="{{route('category.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label class="form-control-label">Category name<span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="category" placeholder="" :value="old('category')" required autofocus autocomplete="category" />
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
          </div>
         </div><!-- col-4 -->
       </div><!-- row -->

      <div class="form-layout-footer">
     <button type="submit" class="btn btn-info mg-r-5">Add Category</button>
    </div><!-- form-layout-footer -->
   </form>
  </div><!-- form-layout -->
</div><!-- card -->
@endsection