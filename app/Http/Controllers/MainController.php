<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('main.index', ['products'=>$products]);
    }
}
