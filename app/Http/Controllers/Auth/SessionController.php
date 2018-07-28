<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SessionController extends Controller
{

    use AuthenticatesUsers;

   public function create(){

     return view('sessions.login');
   }
   public function store(){

     auth()->attempt(request(['email', 'password']))
   }

   public function destroy(){
    
        auth()->logout

        return redirect()->home();

   }
   
}
