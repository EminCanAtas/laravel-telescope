<?php

namespace App\Listeners;

use App\Events\UpdateLog;
use App\Models\Log;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateLogListener
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
     * @param  \App\Events\UpdateLog  $event
     * @return void
     */
    public function handle(UpdateLog $event)
    {
        Log::create([
            'kitap_id' => $event->kitapId,
            'updated_at' => now()
        ]);
    }
}
