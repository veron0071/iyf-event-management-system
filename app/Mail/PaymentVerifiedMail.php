<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentVerifiedMail extends Mailable
{
    use Queueable, SerializesModels;

    public Participant $participant;

    public function __construct(
        Participant $participant
    ) {
        $this->participant = $participant;
    }

    public function build()
    {
        return $this
            ->subject(
                'Payment Verified - International Yoga Festival 2026'
            )
            ->view(
                'emails.payment-verified'
            );
    }
}