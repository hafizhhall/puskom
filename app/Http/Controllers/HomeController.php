<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "titel" => "Home",
            "product" => Product::all(),
            "brand" => Brand::all()
        ]);
    }
}
