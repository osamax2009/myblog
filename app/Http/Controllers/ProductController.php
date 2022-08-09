<?php

namespace App\Http\Controllers;
use App\Models\Product ;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    $products = Product::latest()->paginate(5);
     return view('products.index',compact('products'))
     ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create(){
        return view('products.create');
    }

    public function store (Request $request){

            $request->validate([
                'title'=>'required',
                'description'=>'required',
                'price'=>'required|numeric|between:1,99999999999999',
                'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);


            $input = $request->all();
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $destinationPath = 'public/assets/img';
                $profileImage = date('YmdHis').$file->getClientOriginalExtension();
                $file->move($destinationPath,$profileImage);
                $input['imageUrl']=$destinationPath.'/'.$profileImage;

              
                # code...
            }
        
            Product::Create($input);
            return  redirect('/products');




    }
}
