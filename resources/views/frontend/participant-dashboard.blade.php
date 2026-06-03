<x-guest-layout>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
    rel="stylesheet">

  <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    :root {
      --gold: #C9A84C;
      --gold-light: #F0D589;
      --forest: #1A3A2A;
      --forest-mid: #2D5C40;
      --forest-light: #4A8C62;
      --cream: #FAF7F0;
      --white: #FFFFFF;
      --border: #E4DDD0;
      --text-dark: #1C1C1C;
      --text-mid: #4A4A4A;
      --text-muted: #888;
      --paid-bg: #EAF5EE;
      --paid-border: #7DC99A;
      --paid-text: #1A5C30;
      --unpaid-bg: #FEF3E8;
      --unpaid-border: #F0C078;
      --unpaid-text: #92510A;
    }

    .success-page {
      min-height: 100vh;
      background: var(--cream);
      font-family: 'DM Sans', sans-serif;
      padding: 56px 20px 80px;
    }

    .success-top {
      max-width: 640px;
      margin: 0 auto 32px;
      text-align: center;
    }

    /* .success-icon {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      background: var(--forest);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 30px;
    } */

    .success-title {
      font-family: 'Playfair Display', serif;
      font-size: 38px;
      font-weight: 700;
      color: var(--forest);
      line-height: 1.1;
      margin-bottom: 10px;
    }

    .success-title em {
      color: var(--forest-light);
      font-style: italic;
    }

    .success-sub {
      font-size: 15px;
      font-weight: 300;
      color: var(--text-muted);
      line-height: 1.65;
    }

    .ticket {
      max-width: 640px;
      margin: 0 auto;
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 20px;
      overflow: hidden;
    }

    .ticket-header {
      background: var(--forest);
      padding: 28px 36px;
      display: flex;
      align-items: center;
      gap: 18px;
      position: relative;
      overflow: hidden;
    }

    .ticket-header::before {
      content: '';
      position: absolute;
      top: -40px;
      right: -40px;
      width: 180px;
      height: 180px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201, 168, 76, 0.15) 0%, transparent 65%);
      pointer-events: none;
    }

    .ticket-logo {
      font-size: 32px;
      flex-shrink: 0;
    }

    .ticket-event-name {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 4px;
    }

    .ticket-event-title {
      font-family: 'Playfair Display', serif;
      font-size: 20px;
      font-weight: 700;
      color: var(--white);
      line-height: 1.2;
    }

    .ticket-event-date {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.5);
      margin-top: 3px;
      font-weight: 300;
    }

    .ticket-perf {
      display: flex;
      align-items: center;
      position: relative;
    }

    .ticket-perf::before,
    .ticket-perf::after {
      content: '';
      width: 22px;
      height: 22px;
      border-radius: 50%;
      background: var(--cream);
      border: 1px solid var(--border);
      flex-shrink: 0;
      position: relative;
      z-index: 1;
    }

    .ticket-perf-line {
      flex: 1;
      border-top: 2px dashed var(--border);
      margin: 0 -1px;
    }

    .ticket-body {
      padding: 28px 36px;
    }

    .ticket-reg-num {
      text-align: center;
      margin-bottom: 28px;
    }

    .ticket-reg-label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 6px;
    }

    .ticket-reg-code {
      font-family: 'Playfair Display', serif;
      font-size: 32px;
      font-weight: 700;
      color: var(--forest);
      letter-spacing: 0.06em;
    }

    .ticket-divider {
      height: 1px;
      background: var(--border);
      margin: 0 0 24px;
    }

    .ticket-fields {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 24px;
    }

    .tf-label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 4px;
    }

    .tf-value {
      font-size: 15px;
      font-weight: 500;
      color: var(--text-dark);
      line-height: 1.3;
    }

    .status-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 5px 14px;
      border-radius: 100px;
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 0.04em;
    }

    .status-unpaid {
      background: var(--unpaid-bg);
      border: 1px solid var(--unpaid-border);
      color: var(--unpaid-text);
    }

    .status-paid {
      background: var(--paid-bg);
      border: 1px solid var(--paid-border);
      color: var(--paid-text);
    }

    .status-dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background: currentColor;
      flex-shrink: 0;
    }

    .ticket-chips {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-bottom: 24px;
    }

    .ticket-chip {
      background: #F3F0E8;
      border: 1px solid var(--border);
      border-radius: 100px;
      padding: 5px 14px;
      font-size: 12px;
      color: var(--text-mid);
      font-weight: 500;
    }

    .qr-box {
      text-align: center;
      background: var(--cream);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 28px 20px;
      margin-bottom: 24px;
    }

    .ticket-note {
      font-size: 12px;
      color: var(--text-muted);
      text-align: center;
      line-height: 1.6;
      padding-top: 20px;
      border-top: 1px solid var(--border);
    }

    .ticket-note a {
      color: var(--forest-light);
    }

    @media (max-width: 560px) {
      .ticket-header {
        padding: 22px 24px;
      }

      .ticket-body {
        padding: 22px 24px;
      }

      .ticket-fields {
        grid-template-columns: 1fr;
        gap: 16px;
      }

      .success-title {
        font-size: 28px;
      }

      .ticket-reg-code {
        font-size: 24px;
      }
    }
  </style>

  <div class="success-page">

    <div class="success-top">
      {{-- <div class="success-icon">🎉</div> --}}
      <h1 class="success-title">You're <em>Registered!</em></h1>
      <p class="success-sub">
        @if($participant->payment_status === 'paid')
          Your registration is confirmed. See you on the mat!
        @else
          Your spot is secured.
        @endif
      </p>
    </div>

    <div class="ticket">

      <div class="ticket-header">
        <div class="ticket-logo">🧘</div>
        <div class="ticket-header-text">
          <div class="ticket-event-name">Universitas Wahid Hasyim Semarang</div>
          <div class="ticket-event-title">International Day of Yoga 2026</div>
          <div class="ticket-event-date">Saturday, 20 June 2026 · 06.30 WIB · UNWAHAS Stadium</div>
        </div>
      </div>

      <div class="ticket-perf">
        <div class="ticket-perf-line"></div>
      </div>

      <div class="ticket-body">

        <div class="ticket-reg-num">
          <div class="ticket-reg-label">Registration Number</div>
          <div class="ticket-reg-code">{{ $participant->registration_code }}</div>
        </div>

        <div class="ticket-divider"></div>

        <div class="ticket-fields">
          <div class="ticket-field">
            <div class="tf-label">Full Name</div>
            <div class="tf-value">{{ $participant->name }}</div>
          </div>
          <div class="ticket-field">
            <div class="tf-label">Email</div>
            <div class="tf-value" style="font-size:13px; word-break:break-all;">{{ $participant->email }}</div>
          </div>
          <div class="ticket-field">
            <div class="tf-label">Registration Status</div>
            <div class="tf-value">
              @if(strtolower($participant->payment_status) === 'paid')
                <span class="status-badge status-paid">
                  <span class="status-dot"></span>
                  CONFIRMED
                </span>
              @else
                <span class="status-badge status-unpaid">
                  <span class="status-dot"></span>
                  Menunggu Verifikasi
                </span>
              @endif
            </div>
          </div>
          <div class="ticket-field">
            <div class="tf-label">Event Date</div>
            <div class="tf-value">20 June 2026</div>
          </div>
        </div>

        <div class="ticket-chips">
          <span class="ticket-chip">📍 UNWAHAS Stadium, Gunungpati</span>
          <span class="ticket-chip">⏰ Gate opens 05.30 WIB</span>
          <span class="ticket-chip">👕 T-shirt & yoga mat included</span>
        </div>

        @if(
            strtolower(
              $participant->payment_status
            ) === 'paid'
          )

          <div style="
                  text-align:center;
                  margin:30px 0;
              ">

            <div class="tf-label" style="
                      margin-bottom:15px;
                  ">
              CHECK-IN QR CODE
            </div>

            {!! QrCode::size(220)->generate($participant->portal_token) !!}
          </div>

        @endif

        <div class="ticket-note">
          Save your registration number <strong>{{ $participant->registration_code }}</strong> — you'll need it for
          on-site check-in.<br>
          Questions? Contact <a href="https://wa.me/6281329536201">Bu Eva · 081329536201</a>
        </div>
        {{-- Social Buttons --}}
        <div style="display:flex; gap:10px; justify-content:center; margin-top:24px; flex-wrap:wrap;">
          <a href="https://chat.whatsapp.com/GQA5U5j6JYS87FVZnpGs38" target="_blank" rel="noopener"
            style="display:inline-flex; align-items:center; gap:8px; background:#25D366; color:#fff; text-decoration:none; font-size:13px; font-weight:600; padding:11px 20px; border-radius:100px;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;">
              <path
                d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 0 5.37 0 12c0 2.11.55 4.17 1.6 5.99L0 24l6.18-1.62A11.93 11.93 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.2-1.25-6.21-3.48-8.52ZM12 22c-1.85 0-3.66-.5-5.24-1.44l-.38-.22-3.67.96.98-3.58-.25-.38A9.93 9.93 0 0 1 2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10Zm5.47-7.5c-.3-.15-1.77-.87-2.04-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.64.07A8.13 8.13 0 0 1 9.6 13.4a8.56 8.56 0 0 1-1.67-2.08c-.17-.3-.02-.46.13-.6.13-.13.3-.35.44-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51H6.9c-.2 0-.52.07-.79.37-.27.3-1.03 1.01-1.03 2.46s1.05 2.85 1.2 3.05c.14.2 2.07 3.16 5.02 4.43.7.3 1.25.48 1.67.61.7.22 1.34.19 1.84.12.56-.08 1.77-.72 2.02-1.42.25-.7.25-1.3.17-1.42-.07-.12-.27-.2-.57-.35Z"
                fill="white" />
            </svg>
            Join Group WhatsApp
          </a>

          <a href="https://www.instagram.com/yoga.unwahas/" target="_blank" rel="noopener"
            style="display:inline-flex; align-items:center; gap:8px; background:#C13584; color:#fff; text-decoration:none; font-size:13px; font-weight:600; padding:11px 20px; border-radius:100px;">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" style="flex-shrink:0;">
              <rect x="2" y="2" width="20" height="20" rx="6" stroke="white" stroke-width="2" />
              <circle cx="12" cy="12" r="4.5" stroke="white" stroke-width="2" />
              <circle cx="17.5" cy="6.5" r="1.2" fill="white" />
            </svg>
            @yoga.unwahas
          </a>
        </div>

      </div>
    </div>

  </div>

</x-guest-layout>