<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getAllProduct(){
        $products = DB::table('products')->get();
        return view('product',compact('products'));
    }
}
