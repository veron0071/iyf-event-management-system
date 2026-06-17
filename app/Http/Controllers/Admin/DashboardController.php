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
        $participants = Participant::where('payment_status', 'paid')->get();

        if ($participants->isEmpty()) {
            return back()->with('info', 'Tidak ada peserta paid.');
        }

        foreach ($participants as $index => $participant) {
            \Mail::to($participant->email)
                ->later(
                    now()->addSeconds($index * 60), // jeda 10   detik per email
                    new RegistrationSuccessMail($participant)
                );
        }

        return back()->with('success', "Email dijadwalkan untuk {$participants->count()} peserta.");
    }
}
