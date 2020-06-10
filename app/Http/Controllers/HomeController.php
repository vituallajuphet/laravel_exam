<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
class HomeController extends Controller
{
  
    public function __construct(Request $request){
        
        if(!$request->session()->has('user_id')){
            return Redirect::to('login')->send();
        }

    }
    
    public function index(){
        return "home";
    }
}
