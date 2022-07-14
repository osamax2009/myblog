<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index

    public function index(){

        $product = [
            'id'=>'8798789',
            'title'=>'Iphone',
            'price'=>'400$'
        ];

        $title = "welcome to our class we are 2022" ;
        $details= "we are using laravel "; 
        // return view('products.index',
        // compact('title','details')

        //return view('products.index')->with('title',$title);
        return view('products.index')->with('product',$product);

    }
}
