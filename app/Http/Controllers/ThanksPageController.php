<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksPageController extends Controller
{
    public function index(){
        return view('thankyou');
    }
}
