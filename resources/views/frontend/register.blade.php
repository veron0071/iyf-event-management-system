<x-guest-layout>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        :root {
            --gold: #C9A84C;
            --gold-light: #F0D589;
            --forest: #1A3A2A;
            --forest-mid: #2D5C40;
            --forest-light: #4A8C62;
            --cream: #FAF7F0;
            --white: #FFFFFF;
            --border: #DDD6C8;
            --border-focus: #4A8C62;
            --text-dark: #1C1C1C;
            --text-mid: #4A4A4A;
            --text-muted: #888;
            --error: #C0503A;
        }

        .reg-page {
            min-height: 100vh;
            background: var(--cream);
            font-family: 'DM Sans', sans-serif;
            padding: 48px 20px 80px;
        }

        /* Header strip */
        .reg-header {
            max-width: 720px;
            margin: 0 auto 36px;
            text-align: center;
        }

        .reg-header-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--forest);
            color: var(--gold-light);
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            padding: 7px 18px;
            border-radius: 100px;
            margin-bottom: 20px;
        }

        .reg-header-title {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            font-weight: 700;
            color: var(--forest);
            line-height: 1.1;
            margin-bottom: 10px;
        }

        .reg-header-title em {
            color: var(--forest-light);
            font-style: italic;
        }

        .reg-header-sub {
            font-size: 15px;
            font-weight: 300;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* Event info chips */
        .reg-chips {
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .chip {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 100px;
            padding: 6px 16px;
            font-size: 12px;
            color: var(--text-mid);
            font-weight: 500;
        }

        /* Card */
        .reg-card {
            max-width: 720px;
            margin: 0 auto;
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: 20px;
            overflow: hidden;
        }

        /* Card sections */
        .reg-section {
            padding: 32px 40px;
            border-bottom: 1px solid #F0EAE0;
        }

        .reg-section:last-child {
            border-bottom: none;
        }

        .reg-section-label {
            font-size: 10px;
            font-weight: 500;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--forest-light);
            margin-bottom: 4px;
        }

        .reg-section-title {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--forest);
            margin-bottom: 24px;
        }

        /* Grid helpers */
        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 600px) {
            .grid-2 {
                grid-template-columns: 1fr;
            }
        }

        /* Field */
        .field {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .field+.field {
            margin-top: 0;
        }

        label {
            font-size: 13px;
            font-weight: 500;
            color: var(--text-dark);
            letter-spacing: 0.01em;
        }

        label .req {
            color: var(--forest-light);
            margin-left: 2px;
        }

        label .opt {
            font-size: 11px;
            font-weight: 400;
            color: var(--text-muted);
            margin-left: 4px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        select,
        textarea {
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            color: var(--text-dark);
            background: var(--cream);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 12px 16px;
            width: 100%;
            transition: border-color 0.2s, background 0.2s;
            outline: none;
            appearance: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--border-focus);
            background: var(--white);
        }

        input::placeholder {
            color: var(--text-muted);
        }

        select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23888' stroke-width='2'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 14px center;
            padding-right: 40px;
            cursor: pointer;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
            line-height: 1.6;
        }

        .field-hint {
            font-size: 11.5px;
            color: var(--text-muted);
            line-height: 1.5;
        }

        /* Size selector */
        .size-options {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .size-opt input {
            display: none;
        }

        .size-opt label {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 64px;
            height: 44px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: var(--cream);
            font-size: 14px;
            font-weight: 500;
            color: var(--text-mid);
            cursor: pointer;
            transition: all 0.15s;
            letter-spacing: 0.02em;
        }

        .size-opt input:checked+label {
            background: var(--forest);
            border-color: var(--forest);
            color: var(--gold-light);
        }

        .size-opt label:hover {
            border-color: var(--forest-light);
            color: var(--forest);
        }

        /* Summary box */
        .reg-summary {
            background: #F3F0E8;
            border: 1px solid #E4DDD0;
            border-radius: 12px;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 0;
        }

        .reg-summary-item {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .reg-summary-item-label {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: var(--text-muted);
            font-weight: 500;
        }

        .reg-summary-item-value {
            font-size: 14px;
            font-weight: 500;
            color: var(--forest);
        }

        .reg-summary-sep {
            width: 1px;
            height: 32px;
            background: var(--border);
            flex-shrink: 0;
        }

        /* Guidelines check */
        .agree-row {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 20px 24px;
            background: #F3F0E8;
            border: 1px solid #E4DDD0;
            border-radius: 12px;
        }

        .agree-row input[type="checkbox"] {
            width: 18px;
            height: 18px;
            min-width: 18px;
            accent-color: var(--forest);
            margin-top: 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        .agree-text {
            font-size: 13px;
            color: var(--text-mid);
            line-height: 1.6;
        }

        .agree-text a {
            color: var(--forest-light);
            text-decoration: underline;
        }

        /* Submit */
        .reg-submit-wrap {
            padding: 28px 40px 36px;
        }

        .btn-submit {
            width: 100%;
            background: var(--forest);
            color: var(--gold-light);
            border: none;
            cursor: pointer;
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.04em;
            padding: 16px 32px;
            border-radius: 12px;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-submit:hover {
            background: var(--forest-mid);
        }

        .btn-submit-note {
            text-align: center;
            margin-top: 12px;
            font-size: 12px;
            color: var(--text-muted);
        }

        /* Error messages */
        .field-error {
            font-size: 12px;
            color: var(--error);
            margin-top: 2px;
        }

        @media (max-width: 600px) {
            .reg-section {
                padding: 24px 20px;
            }

            .reg-submit-wrap {
                padding: 20px 20px 32px;
            }

            .reg-header-title {
                font-size: 30px;
            }

            .reg-summary {
                gap: 12px;
            }

            .reg-summary-sep {
                display: none;
            }
        }
    </style>

    <div class="reg-page">

        {{-- Header --}}
        <div class="reg-header">
            <div class="reg-header-badge">
                🧘 International Day of Yoga  2026
            </div>
            <h1 class="reg-header-title">
                Event <em>Registration</em>
            </h1>
            <p class="reg-header-sub">
                Complete the form below to secure your spot.<br>
                Only 2,000 participants — register before it's full.
            </p>
            <div class="reg-chips">
                <span class="chip">📅 Saturday, 20 June 2026</span>
                <span class="chip">📍 UNWAHAS Stadium, Gunungpati</span>
                <span class="chip">🎫 FREE</span>
            </div>
        </div>

        {{-- Form Card --}}
        <div class="reg-card">

            <form method="POST" action="/register-event" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                                <div style="
                        background:#ffeaea;
                        color:#b00020;
                        padding:12px;
                        margin-bottom:20px;
                        border-radius:8px;
                    ">
                                    {{ $errors->first() }}
                                </div>
                @endif

                {{-- Personal Info --}}
                <div class="reg-section">
                    <p class="reg-section-label">Step 1</p>
                    <h2 class="reg-section-title">Personal Information</h2>

                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="field">
                            <label>
                                Participant Type
                                <span class="req">*</span>
                            </label>

                            <select name="participant_type" id="participant_type" required>

                                <option value="general" {{ old('participant_type') == 'general' ? 'selected' : '' }}>
                                    General Participant
                                </option>

                                <option value="employee" {{ old('participant_type') == 'employee' ? 'selected' : '' }}>
                                    UNWAHAS Employee
                                </option>

                            </select>
                        </div>
                        <div class="field">
                            <label for="name">Full Name <span class="req">*</span></label>
                            <input type="text" id="name" name="name" placeholder="e.g. Budi Santoso"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="grid-2">
                            <div class="field">
                                <label for="email">Email Address <span class="req">*</span></label>
                                <input type="email" id="email" name="email" placeholder="email@example.com"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="phone">WhatsApp Number <span class="req">*</span></label>
                                <input type="text" id="phone" name="phone" placeholder="e.g. 081234567890"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="grid-2">
                            <div class="field">
                                <label for="gender">Gender <span class="req">*</span></label>
                                <select id="gender" name="gender" required>
                                    <option value="" disabled selected>Select gender</option>
                                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                                @error('gender')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="birth_date">Date of Birth <span class="req">*</span></label>
                                <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}"
                                    required>
                                @error('birth_date')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="city">City / Kota <span class="req">*</span></label>
                            <input type="text" id="city" name="city" placeholder="e.g. Semarang"
                                value="{{ old('city') }}" required>
                            @error('city')
                                <span class="field-error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div id="employee-section" style="display:none;">

                            <div class="field">

                                <label>
                                    NPP / NIP
                                    <span class="req">*</span>
                                </label>

                                <input type="text" name="npp" id="npp" value="{{ old('npp') }}">

                                @error('npp')
                                    <span class="field-error">
                                        {{ $message }}
                                    </span>
                                @enderror

                            </div>

                            <div class="field" style="margin-top:20px;">

                                <label>
                                    Unit Kerja
                                    <span class="req">*</span>
                                </label>

                                <input type="text" name="work_unit" id="work_unit" value="{{ old('work_unit') }}">

                            </div>

                        </div>

                    </div>
                </div>

                {{-- T-Shirt --}}
                <div class="reg-section">
                    <p class="reg-section-label">Step 2</p>
                    <h2 class="reg-section-title">T-Shirt Size</h2>

                    <div class="field">
                        <label>Choose your size <span class="req">*</span></label>
                        <div class="size-options" id="size-options">
                            @foreach($shirtSizes as $size)
                                <div class="size-opt">
                                    <input type="radio" name="shirt_size_id" id="size_{{ $size->id }}"
                                        value="{{ $size->id }}" {{ old('shirt_size_id') == $size->id ? 'checked' : '' }}
                                        required>
                                    <label for="size_{{ $size->id }}">{{ $size->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('shirt_size_id')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                        <span class="field-hint">T-shirt will be handed to you upon registration at the venue.</span>
                    </div>
                </div>

                {{-- Emergency Contact --}}
                <div class="reg-section">
                    <p class="reg-section-label">Step 3</p>
                    <h2 class="reg-section-title">Emergency Contact</h2>

                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        <div class="grid-2">
                            <div class="field">
                                <label for="emergency_contact_name">Contact Name <span class="req">*</span></label>
                                <input type="text" id="emergency_contact_name" name="emergency_contact_name"
                                    placeholder="e.g. Ibu Ani" value="{{ old('emergency_contact_name') }}" required>
                                @error('emergency_contact_name')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="emergency_contact_phone">Contact Phone <span class="req">*</span></label>
                                <input type="text" id="emergency_contact_phone" name="emergency_contact_phone"
                                    placeholder="e.g. 081298765432" value="{{ old('emergency_contact_phone') }}"
                                    required>
                                @error('emergency_contact_phone')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="medical_notes">Medical Notes <span class="opt">(optional)</span></label>
                            <textarea id="medical_notes" name="medical_notes"
                                placeholder="Mention any conditions, allergies, or limitations the medical team should know about...">{{ old('medical_notes') }}</textarea>
                            <span class="field-hint">This information will only be used by our medical team if
                                needed.</span>
                        </div>
                    </div>
                </div>
                {{-- <div id="payment-section" class="reg-section">

                    <p class="reg-section-label">
                        Payment
                    </p>

                    <h2 class="reg-section-title">
                        Transfer Payment
                    </h2>

                    <div class="reg-summary">

                        <div class="reg-summary-item">
                            <span class="reg-summary-item-label">
                                Bank
                            </span>

                            <span class="reg-summary-item-value">
                                BCA Syariah
                            </span>
                        </div>

                        <div class="reg-summary-sep"></div>

                        <div class="reg-summary-item">
                            <span class="reg-summary-item-label">
                                Account Name
                            </span>

                            <span class="reg-summary-item-value">
                                PKKAM UNWAHAS
                            </span>
                        </div>

                        <div class="reg-summary-sep"></div>

                        <div class="reg-summary-item">
                            <span class="reg-summary-item-label">
                                Account Number
                            </span>

                            <span class="reg-summary-item-value">
                                0577000888
                            </span>
                        </div>

                    </div>

                    <div class="field" style="margin-top:20px;">

                        <label>
                            Upload Payment Proof
                            <span class="req">*</span>
                        </label>

                        <input type="file" name="payment_proof" accept=".jpg,.jpeg,.png,.pdf">

                    </div>

                </div> --}}

                {{-- Summary + Agreement --}}
                <div class="reg-section" style="display: flex; flex-direction: column; gap: 16px;">
                    <p class="reg-section-label">Summary</p>

                    <div class="reg-summary">
                        <div class="reg-summary-item">
                            <span class="reg-summary-item-label">Event</span>
                            <span class="reg-summary-item-value">International Day of Yoga 2026</span>
                        </div>
                        <div class="reg-summary-sep"></div>
                        <div class="reg-summary-item">
                            <span class="reg-summary-item-label">Date</span>
                            <span class="reg-summary-item-value">Sat, 20 June 2026</span>
                        </div>
                        <div class="reg-summary-sep"></div>
                        <div class="reg-summary-item">
                            <span class="reg-summary-item-label">Venue</span>
                            <span class="reg-summary-item-value">UNWAHAS Stadium</span>
                        </div>
                        <div class="reg-summary-sep"></div>
                        {{-- <div class="reg-summary-item">
                            <span class="reg-summary-item-label">Entry Fee</span>
                            <span class="reg-summary-item-value"
                                style="color: var(--forest-light); font-weight: 600;">Rp 50.000</span>
                        </div> --}}
                    </div>

                    <div class="agree-row">
                        <input type="checkbox" id="agree" name="agree" required>
                        <label for="agree" class="agree-text"
                            style="font-size: 13px; font-weight: 400; letter-spacing: 0;">
                            I have read and agree to the <a href="#">Participant Guidelines</a>. I understand that
                            photos and videos may be taken during the event for documentation and promotional purposes.
                        </label>
                    </div>
                </div>

                {{-- Submit --}}
                <div class="reg-submit-wrap">
                    <button type="submit" class="btn-submit">
                        Register Now &rarr;
                    </button>
                    <p class="btn-submit-note">
                        Questions? Contact <strong>Bu Eva</strong> via WhatsApp: 081329536201
                    </p>
                </div>

            </form>
        </div>

    </div>
    <script>

        const participantType =
            document.getElementById(
                'participant_type'
            );

        const employeeSection =
            document.getElementById(
                'employee-section'
            );

        const paymentSection =
            document.getElementById(
                'payment-section'
            );

        function toggleParticipantType() {
            if (
                participantType.value ===
                'employee'
            ) {

                employeeSection.style.display =
                    'block';

                paymentSection.style.display =
                    'none';

            } else {

                employeeSection.style.display =
                    'none';

                paymentSection.style.display =
                    'block';
            }
        }

        participantType.addEventListener(
            'change',
            toggleParticipantType
        );

        toggleParticipantType();

    </script>
</x-guest-layout>