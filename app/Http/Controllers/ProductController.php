<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //index method
    public function index()
    {
        $allproducts = Product::all();
       return view("product", ["data" => $allproducts]);
    }

    public function detail($id)
    {
        $data =  Product::find($id);
        return view("detail",["detail" => $data]);
    }

    public function search(Request $request)
    {
        $data =  Product::where("name", "like", "%".$request->input("search")."%")->get();
        return view("search", ["data" => $data, "term" => $request->input("search")]);
    }
}