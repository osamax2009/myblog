<?php

namespace App\Http\Controllers;
use App\Models\User ;
use Illuminate\Http\Request;

class AuthController extends Controller
{
        public    function show()
            {
                return view('auth.register');
            }

            public  function register(Request $request)
            {
               $user = User::create($request->validated());
               
            }

}
