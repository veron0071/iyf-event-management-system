<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Mail\PaymentVerifiedMail;
use Illuminate\Support\Facades\Mail;
use App\Exports\ParticipantsExport;
use Maatwebsite\Excel\Facades\Excel;

class AdminParticipantController extends Controller
{
    public function index(Request $request)
    {
        $query = Participant::with('shirtSize')->latest();

        // Filter: pencarian nama / kode / email
        if ($search = $request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('registration_code', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter: tipe peserta (pegawai / umum)
        if ($type = $request->get('type')) {
            $query->where('participant_type', $type);
        }

        // Filter: status bayar (paid / unpaid)
        if ($pay = $request->get('pay')) {
            $query->where('payment_status', $pay);
        }

        // Filter: status check-in (1 = sudah, 0 = belum)
        if ($request->filled('checkin')) {
            $query->where('checkin_status', (bool) $request->get('checkin'));
        }

        $participants = $query->paginate(20)->withQueryString();

        return view('admin.participants.index', compact('participants'));
    }

    public function show(Participant $participant)
    {
        return view('admin.participants.show', compact('participant'));
    }

    // public function verifyPayment(Participant $participant)
    // {
    //     $participant->update([
    //         'payment_status' => 'paid',
    //         'paid_at'        => now(),
    //     ]);

    //     Mail::to($participant->email)->send(
    //         new PaymentVerifiedMail($participant)
    //     );

    //     return back()->with('success', "Pembayaran {$participant->name} berhasil diverifikasi.");
    // }

    public function checkin($token)
    {
        $participant = Participant::where('portal_token', $token)->firstOrFail();

        if ($participant->payment_status !== 'paid') {
            abort(403, 'Payment not verified');
        }

        if (!$participant->checkin_status) {
            $participant->update([
                'checkin_status' => true,
                'checkin_at'     => now(),
            ]);
        }

        return view('admin.participants.checkin-success', compact('participant'));
    }

    public function scanner()
    {
        return view('admin.participants.scanner');
    }

    public function processCheckin(Request $request)
    {
        $input = $request->token;

        // Handle kalau QR encode full URL
        if (filter_var($input, FILTER_VALIDATE_URL)) {
            $input = basename(parse_url($input, PHP_URL_PATH));
        }

        $participant = Participant::with('shirtSize')
            ->where('portal_token', $input)
            ->first();

        if (!$participant) {
            return response()->json([
                'success' => false,
                'message' => 'Peserta tidak ditemukan.',
            ]);
        }

        if ($participant->payment_status !== 'paid') {
            return response()->json([
                'success' => false,
                'message' => 'Pembayaran belum terverifikasi.',
            ]);
        }

        if ($participant->checkin_status) {
            return response()->json([
                'success' => false,
                'message' => 'Peserta sudah check-in sebelumnya.',
                'name'    => $participant->name,
                'code'    => $participant->registration_code,
            ]);
        }

        $participant->update([
            'checkin_status' => true,
            'checkin_at'     => now(),
        ]);

        return response()->json([
            'success' => true,
            'name'    => $participant->name,
            'code'    => $participant->registration_code,
            'city'    => $participant->city,
            'gender'  => ucfirst($participant->gender),
            'shirt'   => $participant->shirtSize->name ?? '-',
            'type'    => ucfirst($participant->participant_type),
        ]);
    }

    public function export(Request $request)
    {
        $filename = 'peserta-yoga-2026_' . now()->format('Ymd_His') . '.xlsx';

        return Excel::download(new ParticipantsExport($request), $filename);
    }
}