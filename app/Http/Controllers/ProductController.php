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
}
