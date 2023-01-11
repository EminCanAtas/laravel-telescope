<?php

namespace App\Jobs;

use App\Models\Kitap;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteKitap implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $kitapId;

    public function __construct($kitapId)
    {
        $this->kitapId = $kitapId;
    }

    public function handle()
    {
        Kitap::query()->find($this->kitapId)->delete();
    }
}
