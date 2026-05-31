<x-guest-layout>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

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
  --unpaid-bg: #FEF3E8;
  --unpaid-border: #F0C078;
  --unpaid-text: #92510A;
  --paid-bg: #EAF5EE;
  --paid-border: #7DC99A;
  --paid-text: #1A5C30;
}

.success-page {
  min-height: 100vh;
  background: var(--cream);
  font-family: 'DM Sans', sans-serif;
  padding: 56px 20px 80px;
}

/* ── TOP BADGE ── */
.success-top {
  max-width: 640px; margin: 0 auto 32px;
  text-align: center;
}
.success-icon {
  width: 72px; height: 72px; border-radius: 50%;
  background: var(--forest);
  display: flex; align-items: center; justify-content: center;
  margin: 0 auto 20px;
  font-size: 30px;
}
.success-title {
  font-family: 'Playfair Display', serif;
  font-size: 38px; font-weight: 700;
  color: var(--forest); line-height: 1.1; margin-bottom: 10px;
}
.success-title em { color: var(--forest-light); font-style: italic; }
.success-sub {
  font-size: 15px; font-weight: 300;
  color: var(--text-muted); line-height: 1.65;
}

/* ── TICKET CARD ── */
.ticket {
  max-width: 640px; margin: 0 auto;
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: 20px;
  overflow: hidden;
}

/* Ticket header */
.ticket-header {
  background: var(--forest);
  padding: 28px 36px;
  display: flex; align-items: center; gap: 18px;
  position: relative; overflow: hidden;
}
.ticket-header::before {
  content: '';
  position: absolute; top: -40px; right: -40px;
  width: 180px; height: 180px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,168,76,0.15) 0%, transparent 65%);
  pointer-events: none;
}
.ticket-logo { font-size: 32px; flex-shrink: 0; }
.ticket-header-text {}
.ticket-event-name {
  font-size: 10px; font-weight: 500;
  letter-spacing: 0.2em; text-transform: uppercase;
  color: var(--gold); margin-bottom: 4px;
}
.ticket-event-title {
  font-family: 'Playfair Display', serif;
  font-size: 20px; font-weight: 700; color: var(--white);
  line-height: 1.2;
}
.ticket-event-date {
  font-size: 13px; color: rgba(255,255,255,0.5);
  margin-top: 3px; font-weight: 300;
}

/* Perforation line */
.ticket-perf {
  display: flex; align-items: center; gap: 0;
  position: relative;
}
.ticket-perf::before, .ticket-perf::after {
  content: '';
  width: 22px; height: 22px; border-radius: 50%;
  background: var(--cream);
  border: 1px solid var(--border);
  flex-shrink: 0;
  position: relative; z-index: 1;
}
.ticket-perf-line {
  flex: 1;
  border-top: 2px dashed var(--border);
  margin: 0 -1px;
}

/* Ticket body */
.ticket-body { padding: 28px 36px; }

.ticket-reg-num {
  text-align: center; margin-bottom: 28px;
}
.ticket-reg-label {
  font-size: 10px; font-weight: 500;
  letter-spacing: 0.2em; text-transform: uppercase;
  color: var(--text-muted); margin-bottom: 6px;
}
.ticket-reg-code {
  font-family: 'Playfair Display', serif;
  font-size: 32px; font-weight: 700;
  color: var(--forest); letter-spacing: 0.06em;
}

/* Divider */
.ticket-divider {
  height: 1px; background: var(--border); margin: 0 0 24px;
}

/* Fields */
.ticket-fields {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 20px; margin-bottom: 24px;
}
.ticket-field {}
.tf-label {
  font-size: 10px; font-weight: 500;
  letter-spacing: 0.15em; text-transform: uppercase;
  color: var(--text-muted); margin-bottom: 4px;
}
.tf-value {
  font-size: 15px; font-weight: 500; color: var(--text-dark);
  line-height: 1.3;
}

/* Payment status badge */
.status-badge {
  display: inline-flex; align-items: center; gap: 6px;
  padding: 5px 14px; border-radius: 100px;
  font-size: 12px; font-weight: 500; letter-spacing: 0.04em;
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
  width: 6px; height: 6px; border-radius: 50%;
  background: currentColor; flex-shrink: 0;
}

/* Payment box */
.payment-box {
  background: var(--unpaid-bg);
  border: 1px solid var(--unpaid-border);
  border-radius: 14px; padding: 22px 24px;
  margin-bottom: 20px;
}
.payment-box-title {
  font-size: 13px; font-weight: 500;
  color: var(--unpaid-text); margin-bottom: 6px;
}
.payment-box-desc {
  font-size: 12.5px; color: var(--unpaid-text);
  opacity: 0.8; line-height: 1.6; margin-bottom: 18px;
}
.payment-amount {
  font-family: 'Playfair Display', serif;
  font-size: 28px; font-weight: 700;
  color: var(--forest); margin-bottom: 16px;
}
.btn-pay {
  display: block; width: 100%;
  background: var(--gold); color: var(--forest);
  border: none; cursor: pointer;
  font-family: 'DM Sans', sans-serif;
  font-size: 15px; font-weight: 500;
  padding: 14px 32px; border-radius: 10px;
  text-align: center; text-decoration: none;
  transition: background 0.2s;
  letter-spacing: 0.03em;
}
.btn-pay:hover { background: var(--gold-light); }

/* Info chips row */
.ticket-chips {
  display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 24px;
}
.ticket-chip {
  background: #F3F0E8;
  border: 1px solid var(--border);
  border-radius: 100px;
  padding: 5px 14px; font-size: 12px;
  color: var(--text-mid); font-weight: 500;
}

/* Footer note */
.ticket-note {
  font-size: 12px; color: var(--text-muted);
  text-align: center; line-height: 1.6;
  padding-top: 20px; border-top: 1px solid var(--border);
}
.ticket-note a { color: var(--forest-light); }

@media (max-width: 560px) {
  .ticket-header { padding: 22px 24px; }
  .ticket-body { padding: 22px 24px; }
  .ticket-fields { grid-template-columns: 1fr; gap: 16px; }
  .success-title { font-size: 28px; }
  .ticket-reg-code { font-size: 24px; }
}
</style>

<div class="success-page">

    {{-- Top --}}
    <div class="success-top">
        <div class="success-icon">🎉</div>
        <h1 class="success-title">You're <em>Registered!</em></h1>
        <p class="success-sub">
            Your spot at the International Yoga Festival 2026 is secured.<br>
            Complete your payment below to confirm your participation.
        </p>
    </div>

    {{-- Ticket --}}
    <div class="ticket">

        {{-- Header --}}
        <div class="ticket-header">
            <div class="ticket-logo">🧘</div>
            <div class="ticket-header-text">
                <div class="ticket-event-name">Universitas Wahid Hasyim Semarang</div>
                <div class="ticket-event-title">International Yoga Festival 2026</div>
                <div class="ticket-event-date">Saturday, 20 June 2026 · 06.30 WIB · UNWAHAS Stadium</div>
            </div>
        </div>

        {{-- Perforation --}}
        <div class="ticket-perf">
            <div class="ticket-perf-line"></div>
        </div>

        {{-- Body --}}
        <div class="ticket-body">

            {{-- Registration Code --}}
            <div class="ticket-reg-num">
                <div class="ticket-reg-label">Registration Number</div>
                <div class="ticket-reg-code">{{ $participant->registration_code }}</div>
            </div>

            <div class="ticket-divider"></div>

            {{-- Details --}}
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
                    <div class="tf-label">Payment Status</div>
                    <div class="tf-value">
                        @if(strtolower($participant->payment_status) === 'paid')
                            <span class="status-badge status-paid">
                                <span class="status-dot"></span>
                                PAID
                            </span>
                        @else
                            <span class="status-badge status-unpaid">
                                <span class="status-dot"></span>
                                {{ strtoupper($participant->payment_status) }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="ticket-field">
                    <div class="tf-label">Event Date</div>
                    <div class="tf-value">20 June 2026</div>
                </div>
            </div>

            {{-- Event chips --}}
            <div class="ticket-chips">
                <span class="ticket-chip">📍 UNWAHAS Stadium, Gunungpati</span>
                <span class="ticket-chip">⏰ Gate opens 05.30 WIB</span>
                <span class="ticket-chip">👕 T-shirt & yoga mat included</span>
            </div>

            {{-- Payment CTA --}}
            @if(strtolower($participant->payment_status) !== 'paid')
            <div class="payment-box">
                <div class="payment-box-title">⚠️ Payment Required</div>
                <div class="payment-box-desc">
                    Complete your payment to confirm your spot. Your registration will be cancelled if payment is not received before the event.
                </div>
                <div class="payment-amount">Rp 50.000</div>
                <button class="btn-pay">
                    Pay Now →
                </button>
            </div>
            @endif

            {{-- Footer note --}}
            <div class="ticket-note">
                Save your registration number <strong>{{ $participant->registration_code }}</strong> — you'll need it for on-site check-in.<br>
                Questions? Contact <a href="https://wa.me/6281329536201">Bu Eva · 081329536201</a>
            </div>

        </div>
    </div>

</div>

</x-guest-layout>