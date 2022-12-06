<?php

namespace App\Listeners;

use App\Events\NewCustomerCreating;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\testMail;

class NewCustomerEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
        //echo "test";
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewCustomerCreating  $event
     * @return void
     */
    public function handle(NewCustomerCreating $event)
    {
        //echo $event->data['email'];
        Mail::to($event->data['email'])->send(new testMail($event));
    }
}
