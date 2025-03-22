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
            'doctor' => 'required',
            'date' => 'required',
            'message' => 'required',
            
        ]);

        Appointment::insert([
            'p_id' => $request->p_id,
            'p_name' => $request->p_name,
            'p_phone' => $request->p_phone,
            'doctor' => $request->doctor,
            'date' => $request->date,
            'message' => $request->message,
            
        ]);
  
        return back()->with('success', 'Success! Booking Successfully');
      }



      public function Delete($id){
        Appointment::FindOrFail($id)->delete();
        return back()->with('success', 'Success! data delete Successfully');
    }



}
