<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EventController extends Controller
{
   public function eventListener(){
    $user=User::inRandomOrder()->first();
    // event(new \App\Events\SomeoneCheckedProfile($user));
    \App\Events\SomeoneCheckedProfile::dispatch($user);
    echo $user->name ." Your Profile Checked!";

   }

   public function statusLiked(){
      event(new \App\Events\StatusLiked('Someone'));
      return "Event has been sent!";
     }
}
