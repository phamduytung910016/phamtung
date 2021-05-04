<?php

namespace App\Listeners;

use App\Events\NewProduct;
use App\Notifications\SendMailRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailAfterNewProduct implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    use InteractsWithQueue;
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $event->user->notify(new SendMailRequest());
        //return redirect('/admin/thietbihong/')->with('add', 'Thêm mới thành công');
    }
}
