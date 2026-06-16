<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
use chillerlan\QRCode\Output\QRGdImagePNG;

class RegistrationSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $participant;

    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
        // tidak ada QR di sini
    }

    public function build()
{
    $options = new QROptions;
    $options->outputInterface = QRGdImagePNG::class;
    $options->outputBase64 = false;

    $pngData = (new QRCode($options))->render($this->participant->portal_token);

    return $this
        ->subject('International Yoga Festival 2026 Registration')
        ->view('emails.registration-success')
        ->with([
            'participant' => $this->participant,
            'pngData' => $pngData,
        ])
        ->attachData($pngData, 'qrcode.png', ['mime' => 'image/png']);
}
}
