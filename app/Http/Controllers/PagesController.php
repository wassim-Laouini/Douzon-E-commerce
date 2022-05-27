<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PagesController extends Controller
{


    public function home(){
        return view('layout_master.index');
    } 
    public function login(){
        return view('layout_master.login');
    }
    public function register(){
        return view('layout_master.register');
    }
    public function articles(){
        return view('layout_master.shop');
    }
    public function lastarticles(){
        return view('layout_master.lastest');
    }
    public function proddetait(){
        return view('layout_master.product_detait');
    }
    public function contact(){
        return view('layout_master.contact');
    }
    public function cardconfermation(){
        return view('layout_master.confirmation');
    }
    public function checkout(){
        return view('layout_master.checkout');
    }
    public function Quantityprod(){
        return view('layout_master.cart');
    }
    public function blogdetails(){
        return view('layout_master.blog-details');
    }
    public function blog(){
        return view('layout_master.blog');
    }
    public function about(){
        return view('layout_master.about');
    }
 public function resetpassword(){
     return view('layout_master.reset');
   }
   public function resetemail(){
    return view('layout_master.email');
  }

}
