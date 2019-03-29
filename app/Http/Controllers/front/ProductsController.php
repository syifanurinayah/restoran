<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use Cart;

class ProductsController extends Controller
{

    public function cart() 
    {
        return view('front/products.cart');
    }
   public function add_to_cart(Request $request){
       
    Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Products');
    return redirect('cart');
   }

   public function destroy($id)
   {
       Cart::remove($id);  
       return redirect()->back()->with('msg','Item has been removed to cart');
   }

   public function update(Request $request,$id)
   {
       
       $product = Cart::update($id,$request->qty);

       session()->flash('msg','Quantity has been updated');

       return response()->json(['success' => true]);
   }

   public function checkout(){
        return view('front/products.checkout');
   }

   
}
