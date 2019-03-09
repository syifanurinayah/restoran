<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function index(){
    	return view('admin/index');
    }
    public function logout()
    {
        auth()->logout();

        session()->flash('msg', 'You Have Been Logged out Successfully');

        return redirect('auth/login');
    }
}
