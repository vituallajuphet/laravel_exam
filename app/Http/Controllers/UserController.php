<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
class UserController extends Controller
{
    //

    public function __construct(Request $request){
        
        if($request->session()->has('user_id')){
            return Redirect::to('home')->send();
        }

    }

    public function index(){

        return view("login");
        

    }

    public function register(Request $request){

       $response = array("status" => false);

      DB::table('users')->insert(
        ['name' => $request["name"], 'email' => $request["email"], "password" => $request["password"]]
      );

      $response = array("status" => true);

       echo  json_encode($response);

    }




    public function check_email(Request $request){

       $response = array("status" => false);

        $user = DB::table('users')->where('email', $request["email"])->first();

        if(!empty( $user)){
            $response = array("status" => true);
        }

        echo  json_encode($response);

    }

    public function login_account(Request $request){

       $response = array("status" => true, "data" => []);

        $users = DB::table('users')
        ->where(['email' => $request["email"], 'password' => $request["password"]])->get();

        if(isset( $users[0]->id)){
            $response = array("status" => true, "data" => $users);
            $request->session()->put('user_id', $users[0]->id);
        }

        echo  json_encode($response);

    }
    
    
    


}
