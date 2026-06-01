<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationSuccessMail;
use App\Models\Employee;
use App\Models\Participant;
use App\Models\ShirtSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function create()
    {
        $shirtSizes = ShirtSize::where(
            'is_active',
            true
        )
        ->orderBy('sort_order')
        ->get();

        return view(
            'frontend.register',
            compact('shirtSizes')
        );
    }

    public function store(Request $request)
    {
        $request->validate([

            'participant_type' =>
                'required|in:general,employee',

            'name' =>
                'required|string|max:255',

            'email' =>
                'required|email|unique:participants,email',

            'phone' =>
                'required',

            'gender' =>
                'required',

            'birth_date' =>
                'required|date',

            'city' =>
                'required',

            'shirt_size_id' =>
                'required',

            'emergency_contact_name' =>
                'required',

            'emergency_contact_phone' =>
                'required',

        ]);

        if (
            $request->participant_type ===
            'employee'
        ) {

            $request->validate([
                'npp' => 'required'
            ]);
        }

        if (
            $request->participant_type ===
            'general'
        ) {

            $request->validate([
                'payment_proof' =>
                    'required|file|mimes:jpg,jpeg,png,pdf|max:5120'
            ]);
        }

        $last =
            Participant::latest('id')
            ->first();

        $nextNumber =
            $last
            ? $last->id + 1
            : 1;

        $registrationCode =
            'IYF26-' .
            str_pad(
                $nextNumber,
                6,
                '0',
                STR_PAD_LEFT
            );

        $paymentStatus = 'pending';
        $paidAt = null;

        $npp = null;
        $workUnit = null;

        $paymentProof = null;

        if (
            $request->participant_type ===
            'employee'
        ) {

            $employee =
                Employee::where(
                    'npp',
                    $request->npp
                )->first();

            if (!$employee) {

                return back()
                    ->withInput()
                    ->withErrors([
                        'npp' =>
                        'NPP/NIP tidak ditemukan.'
                    ]);
            }

            $alreadyRegistered =
                Participant::where(
                    'npp',
                    $request->npp
                )->exists();

            if ($alreadyRegistered) {

                return back()
                    ->withInput()
                    ->withErrors([
                        'npp' =>
                        'NPP/NIP sudah terdaftar.'
                    ]);
            }

            $paymentStatus = 'paid';

            $paidAt = now();

            $npp =
                $employee->npp;

            $workUnit =
                $employee->employee_type;
        }
        else {

            if (
                $request->hasFile(
                    'payment_proof'
                )
            ) {

                $paymentProof =
                    $request
                    ->file(
                        'payment_proof'
                    )
                    ->store(
                        'payment-proofs',
                        'public'
                    );
            }
        }

        $participant =
            Participant::create([

                'registration_code' =>
                    $registrationCode,

                'name' =>
                    $request->name,

                'email' =>
                    $request->email,

                'phone' =>
                    $request->phone,

                'gender' =>
                    $request->gender,

                'birth_date' =>
                    $request->birth_date,

                'city' =>
                    $request->city,

                'shirt_size_id' =>
                    $request->shirt_size_id,

                'emergency_contact_name' =>
                    $request->emergency_contact_name,

                'emergency_contact_phone' =>
                    $request->emergency_contact_phone,

                'medical_notes' =>
                    $request->medical_notes,

                'participant_type' =>
                    $request->participant_type,

                'npp' =>
                    $npp,

                'work_unit' =>
                    $workUnit,

                'payment_proof' =>
                    $paymentProof,

                'payment_status' =>
                    $paymentStatus,

                'paid_at' =>
                    $paidAt,

                'portal_token' =>
                    Str::uuid(),

                'agreed_terms' =>
                    true,

                'agreed_media' =>
                    true,
            ]);

        Mail::to(
            $participant->email
        )->send(
            new RegistrationSuccessMail(
                $participant
            )
        );

        return redirect(
            '/participant/' .
            $participant->portal_token
        );
    }

    public function dashboard($token)
    {
        $participant =
            Participant::where(
                'portal_token',
                $token
            )
            ->firstOrFail();

        return view(
            'frontend.participant-dashboard',
            compact('participant')
        );
    }
}
