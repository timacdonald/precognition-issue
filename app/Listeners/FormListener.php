<?php

namespace App\Listeners;

use Statamic\Events\SubmissionCreated;

class FormListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionCreated $event): void
    {
        sleep(1);
    }
}
