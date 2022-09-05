<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Jobs\CustomerJob;

class EmailController extends Controller
{
    public function SendMail(){
        // dispatch(new CustomerJob())->delay(Carbon::now()->addMinutes(1));
        CustomerJob::dispatch()->delay(Carbon::now()->addMinutes(1));
        dd("Your Email has been sent!");
    }
}
