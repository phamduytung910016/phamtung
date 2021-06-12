<?php

namespace App\Jobs;

use App\Mail\MailNotify;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SendMailRequest;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $users;
    protected $data;

    public function __construct(User $user,$data)
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->user->where('maNguoiDung','20182876')->first()->email)->send(new MailNotify($this->data));
    }
}
