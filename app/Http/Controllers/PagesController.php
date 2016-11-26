<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    public function getIndex(){
    	$products = Product::orderBy('id','desc')->get();

        return view('pages.welcome')->withProducts($products);
    }
    public function getSingle($id){
    	$product = Product::find($id);

        return view('pages.welcome')->withProduct($product);
    }
}
