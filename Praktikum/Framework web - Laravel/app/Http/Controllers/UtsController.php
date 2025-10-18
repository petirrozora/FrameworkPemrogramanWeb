<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UtsController extends Controller
{
    public function index()
    {
        $data = DB::table('uts')->get();

        return view('uts.index', compact('data'));
    }


    public function web()
    {
        return view('uts.uts_web');
    }

    
    public function database()
    {
        return view('uts.uts_database');
    }
}
