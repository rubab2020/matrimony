<?php

namespace App\Jobs;

use App\Models\OTP;
use App\Services\SMSService;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $recipient;
    protected $message;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($recipient, $message)
    {
        $this->recipient = $recipient;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return (new SMSService)->sendSMS($this->recipient, $this->message);
    }
}
