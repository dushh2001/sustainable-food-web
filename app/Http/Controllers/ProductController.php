<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // You can pass data to the view if needed, such as products from a database
        return view('products'); // Adjust the path if needed
    }
}
