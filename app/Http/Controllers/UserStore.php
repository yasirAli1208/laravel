<?php

namespace App\Http\Controllers;

use App\Models\User_store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserStore extends Controller
{
    public function storeuser( Request $request){
        // return view ('posts.account');
        // dd($request->email);
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'password' => ['required','confirmed']
        ]);

        User_store::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
    }
}
