
@php
  $patient = App\Models\Appointment::latest()->get();         
@endphp

@extends('admin.layouts.template')
@section('content')

 <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Patient Details</h6>
        <p class="mg-b-20 mg-sm-b-30">Get expert advice from professionals anytime, anywhere.</p>

          <div class="table-wrapper">
            <table id="datatable" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th class="wd-15p">Patient ID</th>
                  <th class="wd-15p">Patient name</th>
                  <th class="wd-15p">Phone number</th>
                  <th class="wd-10p">Department</th>
                  <th class="wd-15p">Doctor</th>
                  <th class="wd-10p">Date</th>
                  <th class="wd-10p">Time</th>
                  <th class="wd-10p">Action</th>
                </tr>
              </thead>
              
              <tbody>
              	@foreach($patient as $key => $data)
                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->name}}</td>
                  <td>{{$data->phone}}</td>
                  <td>{{$data->department}}</td>
                  <td>{{$data->doctor}}</td>
                  <td>{{$data->date}}</td>
                  <td>{{$data->time}}</td>
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



       






      
