<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;
class HomeController extends Controller
{
    public function index(){
        $products = Products::all();    
        return view('front/index',compact('products'));
    }   
}
