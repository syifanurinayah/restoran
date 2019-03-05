<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;

class ProductsController extends Controller
{

    public function setCookie(Request $request){
        $minutes = 60;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('name', 'MyValue', $minutes));
        return $response;
     }
    public function add_to_cart(Request $request){
        $request->cookie('cart-product');
        dd(cookie('cart-product'));
        // $code = $request->cookie('cart-product');
        // return view('index');
    }
}
