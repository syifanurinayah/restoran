<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        return view('admin/category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin/category.create');
    }


    public function store(Request $request)
    {
        $category = new Categories();
        $category->name = $request->name;
        $category->image = $request->image;
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $ext = $foto->getClientOriginalExtension();

            if ($request->file('image')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $upload_path = 'foto';
                $request->file('image')->move($upload_path, $foto_name);
                $category->image = $foto_name;
            }
        }
        if(!$category->save()){
            session()->flash('msg','cannot save');
            return redirect('admin/category.create');
        }else{
            session()->flash('msg','data has been addes');
            return redirect('category');
        }
    }
   
    public function edit($id)
    {
        $category = Categories::find($id);
        return view('admin/category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Categories::find($id);
        $category->name = $request->name;
        $category->image = $request->image;
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $ext = $foto->getClientOriginalExtension();

            if ($request->file('image')->isValid()) {
                $foto_name = date('YmdHis'). ".$ext";
                $upload_path = 'foto';
                $request->file('image')->move($upload_path, $foto_name);
                $category->image = $foto_name;
            }
        }
        if(!$category->save()){
            session()->flash('msg','cannot save');
            return redirect('admin/category'. $id);
        }else{
            session()->flash('msg','data has been edited');
            return redirect('category');
        }
    }

    
    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect('category');
    }
}
