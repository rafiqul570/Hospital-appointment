<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class appointmentController extends Controller
{
    
    public function Index(){
        $patient = Appointment::latest()->get();
        return view('appointment.index', compact('patient'));
      }




    public function Create(){
  
        return view('appointment.create');
      }


    public function Store(Request $request){

            $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'department' => 'required',
            'doctor' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
            
        ]);

        Appointment::insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'department' => $request->department,
            'doctor' => $request->doctor,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,
            
        ]);
  
        return redirect()->route('pages.confirmation')->with('success', 'Success! Booking Successfully');
      }



      public function Delete($id){
        Appointment::FindOrFail($id)->delete();
        return back()->with('success', 'Success! data delete Successfully');
    }



}
