<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function Index(){

        return view('category.index');
    }


     public function Create(){

        return view('category.create');
    }


     public function Store(Request $request){

        return view('category.create');
    }
}
