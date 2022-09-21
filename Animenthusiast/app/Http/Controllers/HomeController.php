<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Session;

class HomeController extends Controller{

    public function index(){
        if(!Session::get('user_id')){
            return redirect('login');
        }
        $user = User::find(Session::get('user_id'));
        return view('home')
        ->with('nome', $user->nome)
        ->with('cognome', $user->cognome);
    }
    
     

}

?>