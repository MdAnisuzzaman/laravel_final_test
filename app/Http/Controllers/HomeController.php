<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class HomeController extends Controller
{
    public function index()
        {
            $categories = category::all();
            return view('frontend.home.index',['categories'=>$categories]);
        }
    
    public function product()
    {
        $products = Product::all();
        $categories = category::all();
        return view('frontend.product.product',compact('categories','products'));
    }
    public function show($catId)
    {
        $categories = Category::all();
        $products = Product::where('category_id',$catId)->get();
        
        return view('frontend.product.show',compact('categories','products'));
    }
    public function single($Id)
    {
        $categories = Category::all();
        $products = Product::where('id',$Id)->get();
        
        return view('frontend.product.single-product',compact('categories','products'));
    }
}
