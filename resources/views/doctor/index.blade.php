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

    <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
      <div class="d-flex justify-content-between">
        <h3 class="text-dark pb-3">All Doctor</h3>
        <h5><a  href="{{route('doctor.create')}}" class="btn btn-info text-light">Add Doctor</a></h5>
      </div>
        
         <div class="table-responsive">
           <table id="datatable1" class="table table-striped table-info">
             <thead>
               <tr>
                 <th class="wd-10p">SL</th>
                 <th class="wd-10p">ID</th>
                 <th class="wd-25p">Tile/Name</th>
                 <th class="wd-25p">Department</th>
                 <th class="wd-25p">Image</th>
                 <th class="wd-15p">action</th>
               </tr>
             </thead>

             <tbody>
                @foreach ($allPost as $key => $data)
               <tr>
                 <td>{{++$key}}</td>
                 <td>{{$data->id}}</td>
                 <td>{{$data->title}}</td>
                 <td>{{$data->category_name}}</td>
                 <td>
                  <img src="{{asset('uploads/image/'.$data->post_img)}}" width="80" alt="">
                  <br>
                  <a class="btn btn-sm btn-primary mt-2" href="{{route('doctor.editImage', $data->id)}}">Update Image</a> 
                </td>
                
                 <td>
                    <a href="{{route('doctor.edit', $data->id)}}">Edit</a> ||
                    <a onclick="return confirm('Are you sure ?')" href="{{route('doctor.delete', $data->id)}}"><span class="tx-danger"> Delete</span></a>
                 </td>
               </tr>
               @endforeach
             </tbody>
          </table>
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
