<?php

namespace App\Events;


use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UpdateLog
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public int $kitapId;

    public function __construct($kitapId)
    {
        $this->kitapId = $kitapId;
    }

    public function broadcastOn()
    {

    }
}
