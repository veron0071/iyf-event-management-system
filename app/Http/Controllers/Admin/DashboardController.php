<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationSuccessMail;
use App\Models\Participant;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{


    public function index()
    {
        $totalParticipants = Participant::count();

        $paidParticipants = Participant::where(
            'payment_status',
            'paid'
        )->count();

        $pendingParticipants = Participant::where(
            'payment_status',
            'pending'
        )->count();

        $checkinParticipants = Participant::where(
            'checkin_status',
            true
        )->count();

        $revenue = $paidParticipants * 50000;

        $recentParticipants = Participant::latest()
            ->take(5)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'totalParticipants',
                'paidParticipants',
                'pendingParticipants',
                'checkinParticipants',
                'revenue',
                'recentParticipants'
            )
        );
    }
    public function resendEmail(Participant $participant)
    {
        try {
            Mail::to($participant->email)->send(new RegistrationSuccessMail($participant));

            return back()->with('success', "Email berhasil dikirim ulang ke {$participant->email}");
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }

    public function resendAll()
    {
        $participants = Participant::where('payment_status', 'paid')
            ->whereNull('email_sent_at')
            ->get();

        if ($participants->isEmpty()) {
            return back()->with('info', 'Semua peserta sudah dikirim email.');
        }

        $mailers = ['smtp1', 'smtp2', 'smtp3', 'smtp4', 'smtp5'];
        $batchSize = 450; // sedikit di bawah 500 buat jaga-jaga

        foreach ($participants as $index => $participant) {
            $mailerIndex = intdiv($index, $batchSize);
            $mailer = $mailers[$mailerIndex] ?? $mailers[array_key_last($mailers)];

            Mail::mailer($mailer)
                ->to($participant->email)
                ->later(
                    now()->addSeconds(($index % $batchSize) * 60),
                    new RegistrationSuccessMail($participant)
                );

            $participant->update(['email_sent_at' => now()]);
        }

        return back()->with('success', "Email dijadwalkan untuk {$participants->count()} peserta menggunakan " . count($mailers) . " akun Gmail.");
    }
}
