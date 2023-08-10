<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $attributes = $request->validate([
           
            'email' => ['required', 'email'], 
            'password' => ['required']
        ]);
        if (Auth::attempt($attributes))
        {

          return redirect()->route('skillset');   
            
        }
        return redirect()->back();
    
    }
}





       

       
