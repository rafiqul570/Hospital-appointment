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
          <h3 class="text-dark pb-3">Edit Page name</h3>
          <h5><a  href="{{route('category.index')}}" class="btn btn-light text-dark">All Page</a></h5>
          </div>
       <form action="{{route('category.update') }}" method="POST">
          @csrf

          <input type="hidden" value="{{$editCategory->id}}" name="id">

          <div class="row row-xs mg-t-20">
              <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                <input type="text" name="category_name" value="{{$editCategory->category_name}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
              </div>
            </div>

            <div class="row row-xs mg-t-30">
                <div class="col-sm-12">
                  <div class="form-layout-footer">
                    <button class="btn btn-light mg-r-5">Update</button>
                  </div><!-- form-layout-footer -->
                </div><!-- col-8 -->
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
