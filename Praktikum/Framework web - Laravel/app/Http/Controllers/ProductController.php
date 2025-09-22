<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($angka)
    {
        $hasil = $angka + 5;

        return view('product.index', compact('hasil'));
    }
}
