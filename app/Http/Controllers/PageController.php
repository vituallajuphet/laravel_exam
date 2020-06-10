<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){

      
       $title = "Welcome";

       return view("index")->with("title", $title);

    }

}
