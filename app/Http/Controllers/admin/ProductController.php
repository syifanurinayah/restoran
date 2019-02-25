<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\Categories;
use Yajra\Datatables\Datatables;
use Session;


class ProductController extends Controller
{
    public function index($id = null)
    {
        if ($id != null){
            $products = Products::find($id);            
        } else {
            $products = Products::orderBy('id','DESC')->get();            
        }       
        return view('admin/products.index',compact('products'));
    }

    public function create()
    {
        $category = Categories::pluck('name','id');
        return view('admin/products.create', compact('category'));
    }

   
    public function store(Request $request)
    {
        $products = new Products();
        $products->code = $request->code . '-' . preg_replace('/[^a-zA-Z0-9]/', '', base64_encode(openssl_random_pseudo_bytes(20)));
        $products->name = $request->name;
        $products->price = $request->price;
        $products->discount_percent = $request->discount_percent;
        $products->description = $request->description;
        $products->stok = $request->stok;
        $products->status = $request->status;
        $products->category_id = $request->category_id;
        $products->image = $request->image;
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $ext = $foto->getClientOriginalExtension();

            if ($request->file('image')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $upload_path = 'foto';
                $request->file('image')->move($upload_path, $foto_name);
                $products->image = $foto_name;
            }
        }
        if(!$products->save()){
            Session::flash('flash_message', 'data failed cannot added');
            return redirect('admin/products.create');
        } else{
            Session::flash('flash_message', 'data has been added');
            return redirect('products');
        }
    }

 
    public function detail_products(){
        return Datatables::of(Products::query())->make(true);
    }

    public function show($id)
    {
        
    }

  
    public function edit($id)
    {
        $products = Products::find($id);
        $category = Categories::pluck('name','id');
        return view('admin/products.edit',compact('products','category'));
    }

    public function update(Request $request, $id)
    {
        $products = Products::find($id);
        $products->name = $request->name;
        $products->price = $request->price;
        $products->discount_percent = $request->discount_percent;
        $products->description = $request->description;
        $products->stok = $request->stok;
        $products->status = $request->status;
        $products->category_id = $request->category_id;
        $products->image = $request->image;
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $ext = $foto->getClientOriginalExtension();

            if ($request->file('image')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $upload_path = 'foto';
                $request->file('image')->move($upload_path, $foto_name);
                $products->image = $foto_name;
            }
        }
        if(!$products->save()){
            session()->flash('msg','cannot save');
            return redirect('admin/products.edit'. $id);
        }else{
            session()->flash('msg','data has been edited');
            return redirect('products');
        }
    }

    public function destroy($id)
    {
        $products = Products::find($id);
        $products->delete();
    }
}
