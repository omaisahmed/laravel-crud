<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function redirection(){
        if(auth()->user())
        {
            if(auth()->user()->roles == 1){
                return redirect('/posts');
            }
            if(auth()->user()->roles == 2){
                return redirect('/posts');
            }
            if(auth()->user()->roles == 3){
                return redirect('/posts');
            }

        }
        else{
            redirect('/login');
        }
    }
}
