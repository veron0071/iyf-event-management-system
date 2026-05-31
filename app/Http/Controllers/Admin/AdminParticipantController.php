<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::latest()
            ->paginate(20);

        return view(
            'admin.participants.index',
            compact('participants')
        );
    }
    public function show(Participant $participant)
    {
        return view(
            'admin.participants.show',
            compact('participant')
        );
    }
    public function verifyPayment(
        Participant $participant
    ) {
        $participant->update([
            'payment_status' => 'paid',
            'paid_at' => now(),
        ]);

        return back();
    }
    public function checkin($token)
    {
        $participant = Participant::where(
            'portal_token',
            $token
        )->firstOrFail();

        if ($participant->payment_status !== 'paid') {

            abort(
                403,
                'Payment not verified'
            );
        }

        if (!$participant->checkin_status) {

            $participant->update([
                'checkin_status' => true,
                'checkin_at' => now(),
            ]);
        }

        return view(
            'admin.participants.checkin-success',
            compact('participant')
        );
    }
    public function scanner()
    {
        return view(
            'admin.participants.scanner'
        );
    }
    public function processCheckin(
        Request $request
    ) {
        $participant = Participant::where(
            'portal_token',
            $request->token
        )->first();

        if (!$participant) {

            return response()->json([
                'success' => false,
                'message' => 'Participant not found'
            ]);
        }

        if ($participant->payment_status !== 'paid') {

            return response()->json([
                'success' => false,
                'message' => 'Payment not verified'
            ]);
        }

        if ($participant->checkin_status) {

            return response()->json([
                'success' => false,
                'message' => 'Already checked in'
            ]);
        }

        $participant->update([

            'checkin_status' => true,

            'checkin_at' => now()

        ]);

        return response()->json([
            'success' => true,
            'name' => $participant->name,
            'code' => $participant->registration_code
        ]);
    }
}
