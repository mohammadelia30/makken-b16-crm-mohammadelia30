<?php

namespace App\Jobs;

use App\Mail\Welcome;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $first_name, $last_name, $email;
    public function __construct($first_name, $last_name,$email)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->email)->send(new Welcome($this->first_name, $this->last_name));
    }
}
