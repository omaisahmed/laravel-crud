<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\OrderShippedNotification;

class NotificationController extends Controller
{
    public function order_shipped_notification(){
    $user=User::inRandomOrder()->first();
    $user->notify(new OrderShippedNotification());
    echo $user->name ." (Order Shipped Notification Sent Successfully!)";
    }
}
