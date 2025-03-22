
@php
  $patient = App\Models\Appointment::latest()->get();         
@endphp

@extends('admin.layouts.template')
@section('content')

 <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Book Your Consultation Online</h6>
        <p class="mg-b-20 mg-sm-b-30">Get expert advice from professionals anytime, anywhere.</p>

          <div class="table-wrapper">
            <table id="datatable" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th class="wd-10p">SL NO</th>
                  <th class="wd-10p">ID</th>
                  <th class="wd-20p">Patient name</th>
                  <th class="wd-20p">Phone number</th>
                  <th class="wd-20p">Doctor</th>
                  <th class="wd-10p">Date</th>
                  <th class="wd-10p">Action</th>
                </tr>
              </thead>
              
              <tbody>
              	@foreach($patient as $key => $data)
                <tr class="text-center">
                  <td>{{++$key}}</td>
                  <td>{{$data->p_id}}</td>
                  <td>{{$data->p_name}}</td>
                  <td>{{$data->p_phone}}</td>
                  <td>{{$data->doctor}}</td>
                  <td>{{$data->date}}</td>
                  <td>
                  	<a class="btn btn-primary" href="{{route('appointment.delete', $data->id)}}">Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      @endsection



       






      
