<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class RegisterController extends Controller
{
    public function register(Request $request){


      $attributes = $request->validate([

            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email'], 
            'password' => ['required', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/', 'confirmed'],
        ]);

      

        
        try {
            User::create($attributes);
            return redirect()->route('skillset');


        } catch(Throwable $th)
        {
            Log::error($th) ;
                session()->flash('message','Please try again');
           session()->flash('status','danger');
            return redirect()->back();
        } 
    } 
}
