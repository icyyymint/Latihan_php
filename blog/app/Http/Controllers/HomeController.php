<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //code
    public function index(){
        $angka = 1;
        return view('index', compact('angka'));
    }

    public function input(){
        return view ('input');
    }

    public function store(Request $request){
        return view ('input');
    }
    public function gakjelas(){
        asd;
    }
}
