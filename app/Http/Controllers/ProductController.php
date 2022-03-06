<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            return 'hello';
        }
        else
        {
            return redirect('/login');
        }
    }
}