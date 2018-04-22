<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        return view('tentang');
    }
    public function store(){
        return redirect()->route('tentang.index')->with('success_message', 'Terimakasih telah memberi masukan!');
    }
}
