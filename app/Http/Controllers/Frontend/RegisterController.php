<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Participant;
use App\Models\ShirtSize;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationSuccessMail;
use App\Http\Controllers\Controller;

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

           'email' => 'required|email|unique:participants,email',

            'phone' =>
                'required',

            'gender' =>
                'required',

            'birth_date' =>
                'required',

            'city' =>
                'required',

            'shirt_size_id' =>
                'required',

            'emergency_contact_name' =>
                'required',

            'emergency_contact_phone' =>
                'required',

        ],
        
        [
            'participant_type.required' =>
                'Tipe peserta harus dipilih.',

            'participant_type.in' =>
                'Tipe peserta tidak valid.',

            'name.required' =>
                'Nama lengkap harus diisi.',

            'email.required' =>
                'Email harus diisi.',

            'email.email' =>
                'Format email tidak valid.',

            'email.unique' =>
                'Email sudah terdaftar.',

            'phone.required' =>
                'Nomor telepon harus diisi.',]);


        $last = Participant::latest('id')->first();

        $nextNumber = $last
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

        $npp = null;
        $workUnit = null;

        if (
            $request->participant_type
            === 'employee'
        ) {

            $request->validate([
                'npp' => 'required'
            ]);

            $employee = Employee::where(
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

            $npp = $employee->npp;

            $workUnit =
                $request->work_unit;
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

                'portal_token' =>
                    Str::uuid(),

                'agreed_terms' =>
                    true,

                'agreed_media' =>
                    true,

                'participant_type' =>
                    $request->participant_type,

                'npp' =>
                    $npp,

                'work_unit' =>
                    $workUnit,

                // GRATIS UNTUK SEMUA
                'payment_status' =>
                    'paid',

                'paid_at' =>
                    now(),
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
        $participant = Participant::where(
            'portal_token',
            $token
        )->firstOrFail();

        return view(
            'frontend.participant-dashboard',
            compact('participant')
        );
    }
}
?>
