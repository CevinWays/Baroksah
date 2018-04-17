<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Order;

class UserController extends Controller
{
    public function profile(){
        return view('userprofile.profile', array('user'=> Auth::user()));
    }

    public function update(Request $request){
        //update images
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->clientExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/storage/'. $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('userprofile.profile',array('user'=>Auth::user()));
    }
}
