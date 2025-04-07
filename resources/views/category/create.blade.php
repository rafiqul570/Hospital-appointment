@extends('admin.layouts.template')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
</head>
<body>
    <div class="row">
     <div class="col-md-12">
       <div class="card pd-20 pd-sm-40 form-layout form-layout-5 text-light bg-info">
       <div class="d-flex justify-content-between">
          <h3 class="text-dark mb-5">Add Category</h3>
          <h5><a  href="{{route('category.index')}}" class="btn btn-light text-dark">All Category</a></h5>
          </div>
          <form action="{{route('category.store')}}" method="POST">
            @csrf

            <div class="col-lg-12">
            <div class="form-group mg-b-10-force">
              <label class="">Category</label>
              <select class="form-control select2" name="category_name" data-placeholder="Choose one"
              data-parsley-class-handler="#slWrapper"
              data-parsley-errors-container="#slErrorContainer" required>
              <option selected="" disabled="">Select Category</option>
              <option value="Cardiology">Cardiology</option>
              <option value="Radiology">Radiology</option>
              <option value="Dental">Dental</option>
              <option value="Pediatry">Pediatry</option>
              <option value="Neurology">Neurology</option>
              <option value="Palmology">Palmology</option>
              <option value="Traumatology">Traumatology</option>
              <option value="Hematology">Hematology</option>
              <option value="Medicine">Medicine</option>
              <option value="Orthopaedics">Orthopaedics</option>
              </select>
            </div>
          </div><!-- col-12 -->

            <div class="col-lg-12">
              <div class="form-group">
                  <button type="submit" class="btn btn-light" style="cursor: pointer;">Add Category</button>
              </div>
            </div>

           </form>
          </div><!-- card -->
        </div>
       </div>

       <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

       <script>
        @if (Session::has('success'))
            toastr.success("{{Session::get('success')}}");
        @endif
       </script>

    </body>
  </html>

@endsection
