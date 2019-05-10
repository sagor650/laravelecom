<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();
        return view('home', ['products' => $products]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function productDetails($product_id) {
        $data = DB::table('products')->where('product_row_id', $product_id)->first();
        //dd($data);
        return view('product_detail', ['data' => $data]);   
    }
}
