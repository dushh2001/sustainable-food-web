<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminDash()
    {
        return view('admin_dashboard');
    }

    public function supplierDash()
    {
        return view('supplier_dashboard');
    }
}
