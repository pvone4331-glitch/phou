<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
class HomeController extends Controller
{
    //
    public function index(){
        $province = Province::all();
        return view('address',compact('province'));
    }
}
