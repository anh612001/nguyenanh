<?php

namespace App\Listeners;

use App\Events\'SendInvite;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendInviteListen
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
     * @param  \App\Events\'SendInvite  $event
     * @return void
     */
    public function handle('SendInvite $event)
    {
        
    }
}
