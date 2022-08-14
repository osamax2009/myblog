<?php

namespace App\Http\Controllers;
use App\Models\User ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
        public    function show()
            {
                return view('auth.register');
            }

            public  function register(Request $request)
            {
                        
               // echo $request->password ;
               $user = User::create(
                   [
                    'email' =>$request->email,
                     'name'=>$request->name,
                       'password'=>Hash::make($request->email),
                       ]
                );
                       return   redirect('/');


            }

}
