<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsCall extends Controller
{
    //
    public function about(){
        return view ('posts.about-us');
    }
    public function account(){
        return view ('posts.account');
    }
    public function blog(){
        return view ('posts.blog');
    }
    public function cart(){
        return view ('posts.cart');
    }
    public function checkout(){
        return view ('posts.checkout');
    }
    public function comming(){
        return view ('posts.comming-soon');
    }
    public function contact(){
        return view ('posts.contact');
    }
    public function error(){
        return view ('posts.error');
    }
    public function index(){
        return view ('posts.index');
    }
    public function order(){
        return view ('posts.order');
    }
    public function productView(){
        return view ('posts.product-view');
    }
    public function product(){
        return view ('posts.product');
    }

}
