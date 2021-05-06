<?php

namespace App\Listeners;

use App\Events\BaoHongThietBi;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GuiMailBaoHong
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
     * @param  BaoHongThietBi  $event
     * @return void
     */
    public function handle(BaoHongThietBi $event)
    {
        //
    }
}
