<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Doctor;
use Illuminate\Http\Request;
use File;


class DoctorController extends Controller
{
    public function index(){
        $allPost = Doctor::latest()->get();
        return view('doctor.index', compact('allPost'));
    }

    public function create(){
        $allCategory = Category::latest()->get();
        return view('doctor.create',compact('allCategory'));
    }


 public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'category_id' => 'required',
            'long_description' => 'required',
            'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg}max:2048',
        ]);
        
     
            $image_name = '';
        if($request->has('post_img')){
            $image = $request->file('post_img');
            $image_name = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('uploads/image/',$image_name);
            
        }
            
            $category_id = $request->category_id;
            
            $category_name = Category::where('id', $category_id)->value('category_name');
       

    //image Insert    

        Doctor::insert([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'category_name' => $category_name,
            'long_description' => $request->long_description,
            'post_img' => $image_name,
            'slug' => strtolower(str_replace( ' ', '-', $request->title)),
        ]);

             // Category::where('id', $category_id)->increment('post_count',1);


        return back()->with('success', 'Success! data insert Successfully');
    }


    public function edit($id){
        $post = Doctor::FindOrFail($id);
        return view('doctor.edit', compact('post'));

    }

    public function editImage($id){
        $post = Doctor::FindOrFail($id);
        return view('doctor.editImage', compact('post'));

    }

    
    public function updateImage(Request $request){
        
        $id = $request->id;
        $post = Doctor::FindOrFail($id);

    $request->validate([
        'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
    ]);

    //image upload 
    $image_name = '';
    $deleteOldImage='uploads/image/'.$post->post_img;
    
    if($request->has('post_img')){
        $image = $request->file('post_img');
        if(file_exists($deleteOldImage)){
            File::delete($deleteOldImage);
        }
        
        $image_name = uniqid().'.'.$image->getClientOriginalExtension();
        $image->move('uploads/image/',$image_name);   
    
    }

    Posts::FindOrFail($id)->update([
        'post_img' => $image_name,
        
    ]);


    return redirect()->route('doctor.index')->with('success', 'Success! data update Successfully');

}


    public function update(Request $request){
        
            $id = $request->id;
            $post = Doctor::FindOrFail($id);

        $request->validate([
            'title' => 'required',
            'long_description' => 'required',
           
            
        ]);

        //image upload 
        $image_name = '';
        $deleteOldImage='uploads/image/'.$post->post_img;
        
        if($request->has('post_img')){
            $image = $request->file('post_img');
            if(file_exists($deleteOldImage)){
                File::delete($deleteOldImage);
            }
            
            $image_name = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('uploads/image/',$image_name);   
        }else{
            $image_name = $post->post_img;
        }

        Posts::FindOrFail($id)->update([
            'title' => $request->title,
            'long_description' => $request->long_description,
            'post_img' => $image_name,
            'slug' => strtolower(str_replace( ' ', '-', $request->title)),
        ]);


        return redirect()->route('doctor.index')->with('success', 'Success! data update Successfully');

    }

    //Delete
    public function delete($id){
        $category_id = Doctor::where('id', $id)->value('category_id');
        $post = Doctor::FindOrFail($id);
        
        $image = 'uploads/image/'.$post->post_img;
        if(file_exists($image)){
        File::delete($image);
        }
        
        $post->delete();
        
        Category::where('id', $category_id);
        return back()->with('success', 'Success! data delete Successfully');
    }
}
