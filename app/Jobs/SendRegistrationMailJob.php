<?php

namespace App\Jobs;

use App\Mail\RegistrationSuccessMail;
use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendRegistrationMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3;
    public $backoff = [30, 60, 120];

    public function __construct(
        public Participant $participant,
        public string $mailer
    ) {}

    public function handle(): void
    {
        Mail::mailer($this->mailer)
            ->to($this->participant->email)
            ->send(new RegistrationSuccessMail($this->participant));

        // Set HANYA setelah benar-benar sukses terkirim
        $this->participant->update(['email_sent_at' => now()]);
    }
}