<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [

        'registration_code',

        'name',
        'email',
        'phone',

        'gender',
        'birth_date',
        'city',

        'shirt_size_id',

        'emergency_contact_name',
        'emergency_contact_phone',

        'medical_notes',

        'payment_status',
        'paid_at',

        'portal_token',

        'checkin_status',
        'checkin_at',

        'agreed_terms',
        'agreed_media',
        'participant_type',
        'npp',
        'work_unit',
        'payment_proof',
        
    ];

    public function shirtSize()
    {
        return $this->belongsTo(
            ShirtSize::class
        );
    }
}
