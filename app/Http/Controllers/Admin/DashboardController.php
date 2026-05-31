<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;

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
}