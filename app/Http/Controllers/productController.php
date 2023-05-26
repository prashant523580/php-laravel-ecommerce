<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    function index(){
        $data  = Product::all();
        return View('/home',['products'=>$data]);
    }
    function detail($id){

            $currentData = Product::find($id);
            return View("/detail",['product'=>$currentData]);
    }
    function product(){
        $data = Product::all();
        return View("/product", ['products'=>$data]);
    }
}
