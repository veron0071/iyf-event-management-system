<h2>
    Registration Successful
</h2>

<p>
    Hello {{ $participant->name }},
</p>

<p>
    Thank you for registering for
    International Yoga Festival 2026.
</p>

<p>
    Registration Number:
    <strong>
        {{ $participant->registration_code }}
    </strong>
</p>

<p>
    Payment Status:
    {{ strtoupper($participant->payment_status) }}
</p>

<p>
    Participant Portal:
</p>

<p>
    <a href="{{ url('/participant/'.$participant->portal_token) }}">
        Open Participant Dashboard
    </a>
</p>
