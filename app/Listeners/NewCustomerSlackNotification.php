<?php

namespace App\Listeners;

use App\Events\NewCustomerCreating;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewCustomerSlackNotification
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
     * @param  \App\Events\NewCustomerCreating  $event
     * @return void
     */
    public function handle(NewCustomerCreating $event)
    {
        //
    }
}
