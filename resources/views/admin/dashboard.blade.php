<x-app-layout>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap"
    rel="stylesheet">

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
    }

    .dash-page {
      min-height: 100vh;
      background: var(--cream);
      font-family: 'DM Sans', sans-serif;
      padding: 40px 24px 80px;
    }

    .dash-inner {
      max-width: 1100px;
      margin: 0 auto;
    }

    /* ── Header ── */
    .dash-header {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 32px;
      flex-wrap: wrap;
    }

    .dash-eyebrow {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 6px;
    }

    .dash-title {
      font-family: 'Playfair Display', serif;
      font-size: 30px;
      font-weight: 700;
      color: var(--forest);
      line-height: 1.1;
    }

    .dash-title em {
      font-style: italic;
      color: var(--forest-light);
    }

    .dash-subtitle {
      font-size: 13px;
      color: var(--text-muted);
      margin-top: 5px;
      font-weight: 300;
    }

    .dash-date {
      text-align: right;
      font-size: 12px;
      color: var(--text-muted);
      font-weight: 300;
    }

    .dash-date strong {
      display: block;
      font-size: 14px;
      font-weight: 500;
      color: var(--text-dark);
      margin-bottom: 2px;
    }

    /* ── Hero revenue card ── */
    .revenue-card {
      background: var(--forest);
      border-radius: 24px;
      padding: 32px 36px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: wrap;
      position: relative;
      overflow: hidden;
    }

    .revenue-card::before {
      content: '';
      position: absolute;
      top: -60px; right: -60px;
      width: 280px; height: 280px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(201,168,76,0.12) 0%, transparent 65%);
      pointer-events: none;
    }

    .revenue-card::after {
      content: '';
      position: absolute;
      bottom: -80px; left: 30%;
      width: 200px; height: 200px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(74,140,98,0.15) 0%, transparent 65%);
      pointer-events: none;
    }

    .revenue-left {}

    .revenue-label {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 8px;
    }

    .revenue-amount {
      font-family: 'Playfair Display', serif;
      font-size: 44px;
      font-weight: 700;
      color: var(--white);
      line-height: 1;
      letter-spacing: -0.01em;
    }

    .revenue-sub {
      font-size: 13px;
      color: rgba(255,255,255,0.45);
      margin-top: 8px;
      font-weight: 300;
    }

    .revenue-right {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .rev-mini {
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 16px;
      padding: 16px 20px;
      min-width: 120px;
    }

    .rev-mini-label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.4);
      margin-bottom: 6px;
    }

    .rev-mini-num {
      font-family: 'Playfair Display', serif;
      font-size: 26px;
      font-weight: 700;
      color: var(--white);
    }

    .rev-mini-note {
      font-size: 11px;
      color: rgba(255,255,255,0.35);
      margin-top: 3px;
      font-weight: 300;
    }

    /* ── Stat grid ── */
    .stat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
      gap: 14px;
      margin-bottom: 28px;
    }

    .stat-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 18px;
      padding: 20px 22px;
      text-decoration: none;
      display: block;
      transition: border-color 0.15s, transform 0.15s;
    }
    .stat-card:hover {
      border-color: var(--forest-light);
      transform: translateY(-2px);
    }

    .stat-icon-wrap {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 14px;
    }

    .stat-icon-wrap svg { width: 18px; height: 18px; }

    .icon-green  { background: #EAF5EE; color: #1A5C30; }
    .icon-amber  { background: #FEF3E8; color: #92510A; }
    .icon-blue   { background: #E6F1FB; color: #0C447C; }
    .icon-gray   { background: #F3F0E8; color: #4A4A4A; }
    .icon-forest { background: #E8F0EC; color: var(--forest); }

    .stat-label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 5px;
    }

    .stat-num {
      font-family: 'Playfair Display', serif;
      font-size: 32px;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1;
    }

    .stat-note {
      font-size: 11px;
      color: var(--text-muted);
      margin-top: 5px;
      font-weight: 300;
    }

    /* ── Progress bar ── */
    .progress-section {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 18px;
      padding: 24px 28px;
      margin-bottom: 28px;
    }

    .progress-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .progress-title {
      font-size: 13px;
      font-weight: 500;
      color: var(--text-dark);
    }

    .progress-pct {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 700;
      color: var(--forest);
    }

    .progress-rows { display: flex; flex-direction: column; gap: 14px; }

    .progress-row {}

    .progress-row-top {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 6px;
    }

    .progress-row-label {
      font-size: 12px;
      color: var(--text-mid);
      display: flex;
      align-items: center;
      gap: 7px;
    }

    .progress-dot {
      width: 8px; height: 8px;
      border-radius: 50%;
      flex-shrink: 0;
    }

    .progress-row-val {
      font-size: 12px;
      font-weight: 500;
      color: var(--text-dark);
    }

    .progress-track {
      height: 7px;
      background: #F0EDE5;
      border-radius: 100px;
      overflow: hidden;
    }

    .progress-fill {
      height: 100%;
      border-radius: 100px;
      transition: width 0.6s ease;
    }

    /* ── Quick links ── */
    .quick-links {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 14px;
    }

    .quick-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 18px;
      padding: 20px 22px;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 14px;
      transition: border-color 0.15s, transform 0.15s;
    }
    .quick-card:hover {
      border-color: var(--forest-light);
      transform: translateY(-2px);
    }

    .quick-icon {
      width: 42px; height: 42px;
      border-radius: 12px;
      background: #E8F0EC;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      color: var(--forest);
    }
    .quick-icon svg { width: 20px; height: 20px; }

    .quick-text {}
    .quick-name {
      font-size: 13px;
      font-weight: 500;
      color: var(--text-dark);
    }
    .quick-desc {
      font-size: 11px;
      color: var(--text-muted);
      margin-top: 2px;
    }

    .quick-arrow {
      margin-left: auto;
      color: var(--border);
      flex-shrink: 0;
    }
    .quick-card:hover .quick-arrow { color: var(--forest-light); }
    .quick-arrow svg { width: 16px; height: 16px; }

    /* ── Section label ── */
    .section-label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 12px;
    }

    @media (max-width: 640px) {
      .dash-page { padding: 24px 16px 60px; }
      .dash-title { font-size: 22px; }
      .revenue-amount { font-size: 32px; }
      .revenue-card { padding: 24px 20px; }
    }
  </style>

  <div class="dash-page">
    <div class="dash-inner">

      {{-- ── Header ── --}}
      <div class="dash-header">
        <div>
          <div class="dash-eyebrow">Universitas Wahid Hasyim Semarang</div>
          <h1 class="dash-title">International <em>Yoga</em> Festival</h1>
          <p class="dash-subtitle">Administration Dashboard · 20 Juni 2026</p>
        </div>
        <div class="dash-date">
          <strong>{{ now()->translatedFormat('l, d F Y') }}</strong>
          {{ now()->format('H:i') }} WIB
        </div>
      </div>

      {{-- ── Revenue hero card ── --}}
      @php
        $ticketPrice      = 50000;
        $totalParticipants   = \App\Models\Participant::count();
        $paidParticipants    = \App\Models\Participant::where('payment_status', 'paid')->count();
        $pendingParticipants = \App\Models\Participant::where('payment_status', 'unpaid')->count();
        $checkinParticipants = \App\Models\Participant::where('checkin_status', true)->count();
        $pegawaiCount        = \App\Models\Participant::where('participant_type', 'employee')->count();
        $generalCount        = \App\Models\Participant::where('participant_type', 'general')->count();

        // Revenue: hanya umum (general) yang sudah paid
        $revenue = \App\Models\Participant::where('participant_type', 'general')
                    ->where('payment_status', 'paid')
                    ->count() * $ticketPrice;

        $generalPaid    = \App\Models\Participant::where('participant_type','general')->where('payment_status','paid')->count();
        $generalPending = \App\Models\Participant::where('participant_type','general')->where('payment_status','unpaid')->count();

        $checkinPct = $paidParticipants > 0 ? round($checkinParticipants / $paidParticipants * 100) : 0;
        $paymentPct = $totalParticipants > 0 ? round($paidParticipants / $totalParticipants * 100) : 0;
        $generalPct = $totalParticipants > 0 ? round($generalCount / $totalParticipants * 100) : 0;
      @endphp

      <div class="revenue-card">
        <div class="revenue-left">
          <div class="revenue-label">Total Revenue Terkumpul</div>
          <div class="revenue-amount">Rp {{ number_format($revenue, 0, ',', '.') }}</div>
          <div class="revenue-sub">
            Dari {{ $generalPaid }} peserta umum × Rp 50.000
            &nbsp;·&nbsp; Pegawai UNWAHAS gratis
          </div>
        </div>
        <div class="revenue-right">
          <div class="rev-mini">
            <div class="rev-mini-label">Umum Lunas</div>
            <div class="rev-mini-num">{{ $generalPaid }}</div>
            <div class="rev-mini-note">sudah verifikasi</div>
          </div>
          <div class="rev-mini">
            <div class="rev-mini-label">Umum Pending</div>
            <div class="rev-mini-num">{{ $generalPending }}</div>
            <div class="rev-mini-note">menunggu verif</div>
          </div>
          <div class="rev-mini">
            <div class="rev-mini-label">Potensi</div>
            <div class="rev-mini-num">Rp {{ number_format(($generalPaid + $generalPending) * $ticketPrice, 0, ',', '.') }}</div>
            <div class="rev-mini-note">jika semua terverif</div>
          </div>
        </div>
      </div>

      {{-- ── Stat cards ── --}}
      <div class="section-label">Statistik Peserta</div>
      <div class="stat-grid">

        <a href="{{ route('admin.participants.index') }}" class="stat-card">
          <div class="stat-icon-wrap icon-forest">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
            </svg>
          </div>
          <div class="stat-label">Total</div>
          <div class="stat-num">{{ $totalParticipants }}</div>
          <div class="stat-note">semua peserta</div>
        </a>

        <a href="{{ route('admin.participants.index', ['pay' => 'paid']) }}" class="stat-card">
          <div class="stat-icon-wrap icon-green">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
          </div>
          <div class="stat-label">Lunas</div>
          <div class="stat-num">{{ $paidParticipants }}</div>
          <div class="stat-note">{{ $paymentPct }}% dari total</div>
        </a>

        <a href="{{ route('admin.participants.index', ['pay' => 'unpaid']) }}" class="stat-card">
          <div class="stat-icon-wrap icon-amber">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
          </div>
          <div class="stat-label">Pending</div>
          <div class="stat-num">{{ $pendingParticipants }}</div>
          <div class="stat-note">menunggu verifikasi</div>
        </a>

        <a href="{{ route('admin.participants.index', ['checkin' => '1']) }}" class="stat-card">
          <div class="stat-icon-wrap icon-blue">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
            </svg>
          </div>
          <div class="stat-label">Check-in</div>
          <div class="stat-num">{{ $checkinParticipants }}</div>
          <div class="stat-note">{{ $checkinPct }}% dari lunas</div>
        </a>

        <a href="{{ route('admin.participants.index', ['type' => 'employee']) }}" class="stat-card">
          <div class="stat-icon-wrap icon-blue">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
          </div>
          <div class="stat-label">Pegawai</div>
          <div class="stat-num">{{ $pegawaiCount }}</div>
          <div class="stat-note">UNWAHAS · gratis</div>
        </a>

        <a href="{{ route('admin.participants.index', ['type' => 'general']) }}" class="stat-card">
          <div class="stat-icon-wrap icon-gray">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>
          </div>
          <div class="stat-label">Umum</div>
          <div class="stat-num">{{ $generalCount }}</div>
          <div class="stat-note">Rp 50.000 / orang</div>
        </a>

      </div>

      {{-- ── Progress bars ── --}}
      <div class="section-label">Progress</div>
      <div class="progress-section" style="margin-bottom: 28px;">
        <div class="progress-rows">

          <div class="progress-row">
            <div class="progress-row-top">
              <div class="progress-row-label">
                <span class="progress-dot" style="background:#4A8C62"></span>
                Pembayaran terverifikasi
              </div>
              <div class="progress-row-val">{{ $paidParticipants }} / {{ $totalParticipants }} &nbsp;·&nbsp; {{ $paymentPct }}%</div>
            </div>
            <div class="progress-track">
              <div class="progress-fill" style="width:{{ $paymentPct }}%; background:#4A8C62;"></div>
            </div>
          </div>

          <div class="progress-row">
            <div class="progress-row-top">
              <div class="progress-row-label">
                <span class="progress-dot" style="background:#378ADD"></span>
                Sudah check-in (dari yang lunas)
              </div>
              <div class="progress-row-val">{{ $checkinParticipants }} / {{ $paidParticipants }} &nbsp;·&nbsp; {{ $checkinPct }}%</div>
            </div>
            <div class="progress-track">
              <div class="progress-fill" style="width:{{ $checkinPct }}%; background:#378ADD;"></div>
            </div>
          </div>

          <div class="progress-row">
            <div class="progress-row-top">
              <div class="progress-row-label">
                <span class="progress-dot" style="background:#C9A84C"></span>
                Umum vs Pegawai
              </div>
              <div class="progress-row-val">{{ $generalCount }} umum · {{ $pegawaiCount }} pegawai</div>
            </div>
            <div class="progress-track" style="position:relative;">
              <div class="progress-fill" style="width:{{ $generalPct }}%; background:#C9A84C;"></div>
            </div>
          </div>

        </div>
      </div>

      {{-- ── Quick links ── --}}
      <div class="section-label">Menu Cepat</div>
      <div class="quick-links">

        <a href="{{ route('admin.participants.index') }}" class="quick-card">
          <div class="quick-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
            </svg>
          </div>
          <div class="quick-text">
            <div class="quick-name">Daftar Peserta</div>
            <div class="quick-desc">Kelola & verifikasi</div>
          </div>
          <div class="quick-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </div>
        </a>

        <a href="{{ route('admin.participants.index', ['pay' => 'unpaid']) }}" class="quick-card">
          <div class="quick-icon" style="background:#FEF3E8; color:#92510A;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
          </div>
          <div class="quick-text">
            <div class="quick-name">Pending Verifikasi</div>
            <div class="quick-desc">{{ $pendingParticipants }} menunggu</div>
          </div>
          <div class="quick-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </div>
        </a>

        <a href="{{ route('admin.scanner') }}" class="quick-card">
          <div class="quick-icon" style="background:#E6F1FB; color:#0C447C;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
            </svg>
          </div>
          <div class="quick-text">
            <div class="quick-name">Scanner QR</div>
            <div class="quick-desc">Check-in peserta</div>
          </div>
          <div class="quick-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </div>
        </a>

        <a href="{{ route('admin.participants.export') }}" class="quick-card">
          <div class="quick-icon" style="background:#EAF3DE; color:#27500A;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
            </svg>
          </div>
          <div class="quick-text">
            <div class="quick-name">Export Excel</div>
            <div class="quick-desc">Download semua data</div>
          </div>
          <div class="quick-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
          </div>
        </a>

      </div>

    </div>
  </div>

</x-app-layout>