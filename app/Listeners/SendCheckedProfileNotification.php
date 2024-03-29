<?php

namespace App\Listeners;

use App\Events\SomeoneCheckedProfile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\SendProfileCheckedMailJob;


class SendCheckedProfileNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SomeoneCheckedProfile  $event
     * @return void
     */
    public function handle(SomeoneCheckedProfile $event)
    {
        $delay = now()->addSeconds(3);
        SendProfileCheckedMailJob::dispatch($event->user)->delay($delay);
    }
}
