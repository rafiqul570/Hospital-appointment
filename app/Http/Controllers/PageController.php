<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\appointmentController;
use App\Models\Category;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Posts;

class PageController extends Controller
{
    public function HomePage(){                                    
 
        return view('homePage');
        }

    public function confirmation(){

        return view('pages.confirmation');
    }


    public function about(){

        return view('pages.about');
    }

     public function services(){

        return view('pages.services');
    }
     
     public function department(){

        return view('pages.department');
    }

    public function departmentSingle($id){

        $department = Department::FindOrFail($id);
        //$category_id = Department::where('id', $id)->value('category_id');
        //$related_department = Department::where('category_id', $category_id)->latest()->get();
        
        return view('pages.departmentSingle', compact('department'));
    }
     
     public function doctor(){

        return view('pages.doctor');
    }

    public function categoryPage($id){

        $category_id = Doctor::where('category_id', $id)->value('category_id');
        $doctor = Doctor::where('category_id', $category_id)->latest()->get();
        
        return view('pages.categoryPage', compact('doctor'));

    }

    
    public function doctorSingle($id){

        $doctor = Doctor::FindOrFail($id);
        $category_id = Doctor::where('id', $id)->value('category_id');
        $related_doctor = Doctor::where('category_id', $category_id)->latest()->get();
        
        return view('pages.doctorSingle', compact('doctor', 'related_doctor'));

    }

    public function blog(){

        return view('pages.blog');
    }

    public function contact(){

        return view('pages.contact');
    }

    
  //data show menu_page
    public function pageDetails($id){
        $allCategory = Category::findOrFail($id);
        $allPost = Posts::where('category_id', $id)->latest()->get();
        return view('pages.pageDetails', compact('allCategory', 'allPost'));
    }


     public function pageSingle(){

        return view('pages.pageSingle');
    }

    
}
