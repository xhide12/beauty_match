<?php

namespace App\Listeners;

use App\Events\Chated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChatedListener
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
     * @param  Chated  $event
     * @return void
     */
    public function handle(Chated $event)
    {
        //
    }
}
