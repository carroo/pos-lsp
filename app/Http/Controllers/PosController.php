<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    public function index()
    {
        return view("pos",[
            "produk" => DB::table("produk")->get()
        ]);
    }
}
