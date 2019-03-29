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
        $category = Categories::orderBy('image')->get();    
        return view('front/index',compact('products','category'));
    }   

    public function category($id){
        $category = Categories::all();
        if ($id == 0){
            $products = Products::all();
        }else{
            $products = Products::where('category_id','=', $id);
        }
        return $products;
    }
}
