<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $name = "jao";
        return view('layouts.main');
    }
// , ['name' => $name]
public function create(){
    return view('products.create');
}


}
