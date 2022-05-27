<?php

namespace App\Http\Controllers;
use  App\Traits\Traitsarticle;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use  App\Models\ArticlesModel;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreRequest;

class Admincontroller extends Controller
{
    use Traitsarticle;
    public function admin(){
        return view('layout_master.adminlogin');
    }
    public function adminloginin(LoginRequest $request){
      
       $go = [
            'email'=> $request->email,
            'password'=>$request->password,
        ];

    if(Auth::guard('admin')->attempt($go)){
       
           return redirect()->route('admin.home',);
    }else{
           return redirect()->route('login.admin')->with(['wrong' => 'check out your information']);
    }
    }
    public function test(){
        return view('layout_master.test');
    }
    public function admincreates(){
        $email = 'wassimlaouini@yahoo.com';
        $insert=  Admin::create([
             'email'=>$email,
             'password'=>Hash::make(123456789123),

         ]);
         if (!$insert) {
             return 'error';
         }
         
    }

    public function index()
    {
        return view('home');
    }
  
                      
    
   public function adminindex()
    {
       $articles=ArticlesModel::all();
     return view('admin.categories.index',compact('articles'));
    }

    public function adminnews() {
        return view('admin.news.index');
    }
    public function admincatecreate() {
        return view('admin.categories.create');
    }
    public function admincreate(){
        return view('admin.news.create');
    }
 
    public function adminedit(){
        return view('aadmin.news.edit');
    } 
    public function  categedit($id){
        $articles=ArticlesModel::find($id);
        return view('admin.categories.edit',compact('articles'));
    } 
    public function updatearticles(StoreRequest $request , $id){

        
        ;
        $file_name=$this->saveimage($request->image,folder:'images\articles');

     
        ArticlesModel::where('id',$id)->update([
            'title'=>$request->title,
            'type'=>$request->type,
            'image'=> $file_name,
            'price'=>$request->price,
            'comment'=>$request->comment,
        ]);
        return redirect()->route('admin.categories.index');
       
    }
  


    public function adminlogout(){
        
            auth::guard('admin')->logout();
            return redirect()->route('login.admin');
    }
    public function store(StoreRequest $request){

        
        $file_name=$this->saveimage($request->image,folder:'images\articles');
        ArticlesModel::create([
         'title'=>$request->title,
         'type'=>$request->type,
         'image'=> $file_name,
         'price'=>$request->price,
         'comment'=>$request->comment,
        ]);
    return redirect()->back()->with(['succes' => 'your articles has publish it now ']);
    
    }
}
