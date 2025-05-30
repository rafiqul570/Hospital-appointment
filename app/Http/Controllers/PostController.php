<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use File;

class PostController extends Controller
{
     public function index(){
        $allPost = Posts::latest()->get();
        return view('post.index', compact('allPost'));
    }

    public function create(){
        return view('post.create');
    }


 public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'long_description' => 'required',
            'post_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg}max:2048',
        ]);
        
     
            $image_name = '';
        if($request->has('post_img')){
            $image = $request->file('post_img');
            $image_name = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('uploads/image/',$image_name);
            
        }
            
       

    //image Insert    

        Posts::insert([
            'title' => $request->title,
            'long_description' => $request->long_description,
            'post_img' => $image_name,
            'slug' => strtolower(str_replace( ' ', '-', $request->title)),
        ]);


        return back()->with('success', 'Success! data insert Successfully');
    }


    public function edit($id){
        $post = Posts::FindOrFail($id);
        return view('post.edit', compact('post'));

    }

    public function editImage($id){
        $post = Posts::FindOrFail($id);
        return view('post.editImage', compact('post'));

    }

    
    public function updateImage(Request $request){
        
        $id = $request->id;
        $post = Posts::FindOrFail($id);

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


    return redirect()->route('post.index')->with('success', 'Success! data update Successfully');

}


    public function update(Request $request){
        
            $id = $request->id;
            $post = Posts::FindOrFail($id);

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


        return redirect()->route('post.index')->with('success', 'Success! data update Successfully');

    }

    //Delete
    public function delete($id){
        $post = Posts::FindOrFail($id);
        
        $image = 'uploads/image/'.$post->post_img;
        if(file_exists($image)){
        File::delete($image);
        }
        
        $post->delete();
        
        return back()->with('success', 'Success! data delete Successfully');
    }

}


