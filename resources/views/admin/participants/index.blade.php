<x-app-layout>
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
      --info-bg: #E6F1FB;
      --info-border: #85B7EB;
      --info-text: #0C447C;
    }

    /* ─── Layout ─────────────────────────────── */
    .admin-page {
      min-height: 100vh;
      background: var(--cream);
      font-family: 'DM Sans', sans-serif;
      padding: 40px 24px 80px;
    }

    .admin-inner {
      max-width: 1100px;
      margin: 0 auto;
    }

    /* ─── Page header ────────────────────────── */
    .page-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 28px;
      flex-wrap: wrap;
    }

    .page-header-left {}

    .page-eyebrow {
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      color: var(--forest-light);
      margin-bottom: 6px;
    }

    .page-title {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      font-weight: 700;
      color: var(--forest);
      line-height: 1.1;
    }

    .page-title em {
      font-style: italic;
      color: var(--forest-light);
    }

    .page-subtitle {
      font-size: 13px;
      color: var(--text-muted);
      margin-top: 6px;
      font-weight: 300;
    }

    .btn-export {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 10px 20px;
      background: var(--forest);
      color: #fff;
      border: none;
      border-radius: 100px;
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      font-weight: 500;
      text-decoration: none;
      cursor: pointer;
      white-space: nowrap;
      transition: background 0.15s;
    }

    .btn-export:hover {
      background: var(--forest-mid);
    }

    .btn-export svg {
      width: 15px;
      height: 15px;
      flex-shrink: 0;
    }

    /* ─── Flash messages ─────────────────────── */
    .flash {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 18px;
      border-radius: 12px;
      font-size: 13px;
      font-weight: 500;
      margin-bottom: 20px;
      border: 1px solid;
    }

    .flash-success {
      background: var(--paid-bg);
      border-color: var(--paid-border);
      color: var(--paid-text);
    }

    .flash svg {
      width: 16px;
      height: 16px;
      flex-shrink: 0;
    }

    /* ─── Stat cards ─────────────────────────── */
    .stats-row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
      gap: 10px;
      margin-bottom: 20px;
    }

    .stat-card {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 16px;
      padding: 14px 16px;
      text-decoration: none;
      cursor: pointer;
      transition: border-color 0.15s, background 0.15s;
      display: block;
    }

    .stat-card:hover {
      border-color: var(--forest-light);
    }

    .stat-card.active {
      background: var(--forest);
      border-color: var(--forest);
    }

    .stat-icon {
      width: 28px;
      height: 28px;
      border-radius: 8px;
      background: var(--cream);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
    }

    .stat-card.active .stat-icon {
      background: rgba(255, 255, 255, 0.15);
    }

    .stat-icon svg {
      width: 15px;
      height: 15px;
      color: var(--forest-light);
    }

    .stat-card.active .stat-icon svg {
      color: #fff;
    }

    .stat-label {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--text-muted);
      margin-bottom: 4px;
    }

    .stat-card.active .stat-label {
      color: rgba(255, 255, 255, 0.6);
    }

    .stat-num {
      font-family: 'Playfair Display', serif;
      font-size: 26px;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1;
    }

    .stat-card.active .stat-num {
      color: #fff;
    }

    /* ─── Filter bar ─────────────────────────── */
    .filter-bar {
      display: flex;
      gap: 10px;
      margin-bottom: 16px;
      flex-wrap: wrap;
      align-items: center;
    }

    .filter-bar form {
      display: contents;
    }

    .search-wrap {
      flex: 1;
      min-width: 200px;
      position: relative;
    }

    .search-wrap svg {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      width: 15px;
      height: 15px;
      color: var(--text-muted);
      pointer-events: none;
    }

    .search-wrap input {
      width: 100%;
      padding: 9px 14px 9px 36px;
      border: 1px solid var(--border);
      border-radius: 100px;
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      background: var(--white);
      color: var(--text-dark);
      outline: none;
      transition: border-color 0.15s;
    }

    .search-wrap input:focus {
      border-color: var(--forest-light);
    }

    .search-wrap input::placeholder {
      color: var(--text-muted);
    }

    .filter-select {
      padding: 9px 14px;
      border: 1px solid var(--border);
      border-radius: 100px;
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      background: var(--white);
      color: var(--text-dark);
      outline: none;
      cursor: pointer;
      transition: border-color 0.15s;
      appearance: none;
      -webkit-appearance: none;
      padding-right: 28px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23888' stroke-width='2'%3E%3Cpath d='m6 9 6 6 6-6'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
    }

    .filter-select:focus {
      border-color: var(--forest-light);
    }

    .btn-filter {
      padding: 9px 20px;
      background: var(--forest);
      color: #fff;
      border: none;
      border-radius: 100px;
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.15s;
    }

    .btn-filter:hover {
      background: var(--forest-mid);
    }

    .btn-reset {
      padding: 9px 16px;
      background: transparent;
      color: var(--text-muted);
      border: 1px solid var(--border);
      border-radius: 100px;
      font-family: 'DM Sans', sans-serif;
      font-size: 13px;
      cursor: pointer;
      text-decoration: none;
      transition: border-color 0.15s, color 0.15s;
    }

    .btn-reset:hover {
      border-color: var(--text-muted);
      color: var(--text-dark);
    }

    /* ─── Table ──────────────────────────────── */
    .table-wrap {
      background: var(--white);
      border: 1px solid var(--border);
      border-radius: 20px;
      overflow: hidden;
    }

    .table-scroll {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 13px;
      min-width: 680px;
    }

    thead tr {
      background: #F5F2EA;
      border-bottom: 1px solid var(--border);
    }

    th {
      text-align: left;
      padding: 12px 16px;
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--text-muted);
      white-space: nowrap;
    }

    td {
      padding: 13px 16px;
      color: var(--text-dark);
      border-bottom: 1px solid var(--border);
      vertical-align: middle;
    }

    tbody tr:last-child td {
      border-bottom: none;
    }

    tbody tr:hover td {
      background: #FDFBF6;
    }

    .reg-code {
      font-family: 'Courier New', monospace;
      font-size: 12px;
      color: var(--text-muted);
      letter-spacing: 0.05em;
    }

    .participant-name {
      font-weight: 500;
      color: var(--text-dark);
    }

    .participant-email {
      font-size: 11px;
      color: var(--text-muted);
      margin-top: 2px;
    }

    /* ─── Badges ─────────────────────────────── */
    .badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 4px 11px;
      border-radius: 100px;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 0.03em;
      white-space: nowrap;
    }

    .badge-dot {
      width: 5px;
      height: 5px;
      border-radius: 50%;
      background: currentColor;
      flex-shrink: 0;
    }

    .badge-paid {
      background: var(--paid-bg);
      border: 1px solid var(--paid-border);
      color: var(--paid-text);
    }

    .badge-unpaid {
      background: var(--unpaid-bg);
      border: 1px solid var(--unpaid-border);
      color: var(--unpaid-text);
    }

    .badge-pegawai {
      background: var(--info-bg);
      border: 1px solid var(--info-border);
      color: var(--info-text);
    }

    .badge-umum {
      background: #F3F0E8;
      border: 1px solid var(--border);
      color: var(--text-mid);
    }

    .badge-checkin {
      background: #EAF3DE;
      border: 1px solid #97C459;
      color: #27500A;
    }

    .badge-notcheckin {
      background: #F5F2EA;
      border: 1px solid var(--border);
      color: var(--text-muted);
    }

    /* ─── Action buttons ─────────────────────── */
    .action-wrap {
      display: flex;
      gap: 6px;
      align-items: center;
    }

    .btn-action {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      padding: 5px 12px;
      border-radius: 8px;
      font-family: 'DM Sans', sans-serif;
      font-size: 12px;
      font-weight: 500;
      cursor: pointer;
      border: 1px solid;
      text-decoration: none;
      transition: background 0.12s;
    }

    .btn-action svg {
      width: 13px;
      height: 13px;
      flex-shrink: 0;
    }

    .btn-detail {
      background: transparent;
      border-color: var(--border);
      color: var(--text-mid);
    }

    .btn-detail:hover {
      background: var(--cream);
      border-color: var(--text-muted);
    }

    .btn-verify {
      background: var(--paid-bg);
      border-color: var(--paid-border);
      color: var(--paid-text);
    }

    .btn-verify:hover {
      background: #D6EFE0;
    }

    /* ─── Empty state ────────────────────────── */
    .empty-state {
      text-align: center;
      padding: 48px 24px;
      color: var(--text-muted);
    }

    .empty-state svg {
      width: 40px;
      height: 40px;
      margin: 0 auto 12px;
      display: block;
      color: var(--border);
    }

    .empty-state p {
      font-size: 14px;
    }

    /* ─── Table footer / pagination ──────────── */
    .table-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 20px;
      border-top: 1px solid var(--border);
      background: #FDFBF6;
      gap: 12px;
      flex-wrap: wrap;
    }

    .table-info {
      font-size: 12px;
      color: var(--text-muted);
    }

    .pagination-links {
      display: flex;
      gap: 4px;
    }

    /* Override Laravel default pagination */
    .pagination-links nav {
      display: contents;
    }

    .pagination-links .flex {
      display: flex;
      gap: 4px;
      flex-wrap: wrap;
      align-items: center;
    }

    .pagination-links span[aria-current="page"]>span,
    .pagination-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 32px;
      height: 32px;
      padding: 0 10px;
      border: 1px solid var(--border);
      border-radius: 8px;
      font-family: 'DM Sans', sans-serif;
      font-size: 12px;
      color: var(--text-mid);
      text-decoration: none;
      background: var(--white);
      transition: background 0.12s;
    }

    .pagination-links span[aria-current="page"]>span {
      background: var(--forest);
      border-color: var(--forest);
      color: #fff;
      font-weight: 500;
    }

    .pagination-links a:hover {
      background: var(--cream);
    }

    .pagination-links span[aria-disabled="true"]>span {
      opacity: 0.4;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 32px;
      height: 32px;
      padding: 0 10px;
      border: 1px solid var(--border);
      border-radius: 8px;
      font-size: 12px;
      color: var(--text-muted);
      background: var(--white);
    }

    .pagination-links svg {
      display: none;
    }

    .pagination-links [rel="prev"]::before {
      content: "‹";
    }

    .pagination-links [rel="next"]::after {
      content: "›";
    }

    @media (max-width: 640px) {
      .admin-page {
        padding: 24px 16px 60px;
      }

      .page-title {
        font-size: 22px;
      }

      .stats-row {
        grid-template-columns: repeat(3, 1fr);
      }

      .table-footer {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>

  <div class="admin-page">
    <div class="admin-inner">

      {{-- ── Page header ──────────────────────── --}}
      <div class="page-header">
        <div class="page-header-left">
          <div class="page-eyebrow">International
            Day of
            Yoga 2026</div>
          <h1 class="page-title">Daftar <em>Peserta</em></h1>
          <p class="page-subtitle">Kelola pendaftaran, verifikasi pembayaran & check-in</p>
        </div>
        <a href="{{ route('admin.participants.export') }}" class="btn-export">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
          </svg>
          Export Excel
        </a>
      </div>

      {{-- ── Flash success ─────────────────────── --}}
      @if(session('success'))
        <div class="flash flash-success">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          {{ session('success') }}
        </div>
      @endif

      {{-- ── Stat cards ────────────────────────── --}}
      @php
        $countTotal = \App\Models\Participant::count();
        $countPaid = \App\Models\Participant::where('payment_status', 'paid')->count();
        $countUnpaid = \App\Models\Participant::where('payment_status', 'unpaid')->count();
        $countPegawai = \App\Models\Participant::where('participant_type', 'employee')->count();
        $countUmum = \App\Models\Participant::where('participant_type', 'general')->count();
        $countCheckin = \App\Models\Participant::where('checkin_status', true)->count();
      @endphp

      <div class="stats-row">

        <a href="{{ route('admin.participants.index') }}"
          class="stat-card {{ !request()->hasAny(['pay', 'type', 'checkin']) ? 'active' : '' }}">
          <div class="stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
            </svg>
          </div>
          <div class="stat-label">Total</div>
          <div class="stat-num">{{ $countTotal }}</div>
        </a>

        <a href="{{ route('admin.participants.index', ['pay' => 'paid']) }}"
          class="stat-card {{ request('pay') === 'paid' ? 'active' : '' }}">
          <div class="stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
          </div>
          <div class="stat-label">Lunas</div>
          <div class="stat-num">{{ $countPaid }}</div>
        </a>

        <a href="{{ route('admin.participants.index', ['pay' => 'unpaid']) }}"
          class="stat-card {{ request('pay') === 'unpaid' ? 'active' : '' }}">
          <div class="stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
          </div>
          <div class="stat-label">Belum Verif.</div>
          <div class="stat-num">{{ $countUnpaid }}</div>
        </a>

        <a href="{{ route('admin.participants.index', ['type' => 'employee']) }}"
          class="stat-card {{ request('type') === 'employee' ? 'active' : '' }}">
          <div class="stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
            </svg>
          </div>
          <div class="stat-label">Pegawai</div>
          <div class="stat-num">{{ $countPegawai }}</div>
        </a>

        <a href="{{ route('admin.participants.index', ['type' => 'general']) }}"
          class="stat-card {{ request('type') === 'general' ? 'active' : '' }}">
          <div class="stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>
          </div>
          <div class="stat-label">Umum</div>
          <div class="stat-num">{{ $countUmum }}</div>
        </a>

        <a href="{{ route('admin.participants.index', ['checkin' => '1']) }}"
          class="stat-card {{ request('checkin') === '1' ? 'active' : '' }}">
          <div class="stat-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 3.75 9.375v-4.5ZM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 0 1-1.125-1.125v-4.5ZM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0 1 13.5 9.375v-4.5Z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.75 6.75h.75v.75h-.75v-.75ZM6.75 16.5h.75v.75h-.75v-.75ZM16.5 6.75h.75v.75h-.75v-.75ZM13.5 13.5h.75v.75h-.75v-.75ZM13.5 19.5h.75v.75h-.75v-.75ZM19.5 13.5h.75v.75h-.75v-.75ZM19.5 19.5h.75v.75h-.75v-.75ZM16.5 16.5h.75v.75h-.75v-.75Z" />
            </svg>
          </div>
          <div class="stat-label">Check-in</div>
          <div class="stat-num">{{ $countCheckin }}</div>
        </a>

      </div>

      {{-- ── Filter bar ────────────────────────── --}}
      <div class="filter-bar">
        <form method="GET" action="{{ route('admin.participants.index') }}" style="display:contents">
          <div class="search-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <input type="text" name="search" value="{{ request('search') }}"
              placeholder="Cari nama, kode, atau email..." autocomplete="off">
          </div>

          <select name="type" class="filter-select">
            <option value="">Semua tipe</option>
            <option value="employee" {{ request('type') === 'employee' ? 'selected' : '' }}>Pegawai</option>
            <option value="general" {{ request('type') === 'general' ? 'selected' : '' }}>Umum</option>
          </select>

          <select name="pay" class="filter-select">
            <option value="">Semua status bayar</option>
            <option value="paid" {{ request('pay') === 'paid' ? 'selected' : '' }}>Lunas</option>
            <option value="unpaid" {{ request('pay') === 'unpaid' ? 'selected' : '' }}>Belum verifikasi</option>
          </select>

          <select name="checkin" class="filter-select">
            <option value="">Semua check-in</option>
            <option value="1" {{ request('checkin') === '1' ? 'selected' : '' }}>Sudah check-in</option>
            <option value="0" {{ request('checkin') === '0' ? 'selected' : '' }}>Belum check-in</option>
          </select>

          <button type="submit" class="btn-filter">Cari</button>
          <a href="{{ route('admin.participants.index') }}" class="btn-reset">Reset</a>
        </form>
      </div>

      {{-- ── Table ─────────────────────────────── --}}
      <div class="table-wrap">
        <div class="table-scroll">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Peserta</th>
                <th>Tipe</th>
                <th>Pembayaran</th>
                <th>Check-in</th>
                <th>Kota</th>
                <th>Ukuran Baju</th>
                <th>Gender</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse($participants as $participant)
                <tr>
                  <td style="color: var(--text-muted); font-size:12px">
                    {{ $participants->firstItem() + $loop->index }}
                  </td>

                  <td>
                    <span class="reg-code">{{ $participant->registration_code }}</span>
                  </td>

                  <td>
                    <div class="participant-name">{{ $participant->name }}</div>
                    <div class="participant-email">{{ $participant->email }}</div>
                  </td>

                  <td>
                    @if($participant->participant_type === 'employee')
                      <span class="badge badge-pegawai">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" style="flex-shrink:0">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        Pegawai
                      </span>
                    @else
                      <span class="badge badge-umum">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" style="flex-shrink:0">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        Umum
                      </span>
                    @endif
                  </td>

                  <td>
                    @if(strtolower($participant->payment_status) === 'paid')
                      <span class="badge badge-paid">
                        <span class="badge-dot"></span>
                        Lunas
                      </span>
                    @else
                      <span class="badge badge-unpaid">
                        <span class="badge-dot"></span>
                        Menunggu
                      </span>
                    @endif
                  </td>

                  <td>
                    @if($participant->checkin_status)
                      <span class="badge badge-checkin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none" viewBox="0 0 24 24"
                          stroke-width="2.5" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                        Hadir
                      </span>
                    @else
                      <span class="badge badge-notcheckin">— Belum</span>
                    @endif
                  </td>

                  <td style="color: var(--text-mid); font-size:13px">{{ $participant->city ?? '—' }}</td>

                  <td>
                    <span class="badge badge-umum"
                      style="font-size:11px">{{ $participant->shirtSize->name ?? '—' }}</span>
                  </td>
                  <td>
                    @if(strtolower($participant->gender) === 'male')
                      <span class="badge" style="background:#E6F1FB; border:1px solid #85B7EB; color:#0C447C">♂
                        Laki-laki</span>
                    @elseif(strtolower($participant->gender) === 'female')
                      <span class="badge" style="background:#FBEAF0; border:1px solid #ED93B1; color:#72243E">♀
                        Perempuan</span>
                    @else
                      <span style="color:var(--text-muted)">—</span>
                    @endif
                  </td>

                  <td>
                    <div class="action-wrap">
                      <a href="{{ route('admin.participants.show', $participant) }}" class="btn-action btn-detail">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                          stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        Detail
                      </a>

                      {{-- @if(strtolower($participant->payment_status) !== 'paid')
                      <form action="{{ route('admin.participants.verify', $participant) }}" method="POST"
                        style="display:contents">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn-action btn-verify"
                          onclick="return confirm('Verifikasi pembayaran {{ $participant->name }}?')">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          Verifikasi
                        </button>
                      </form>
                      @endif --}}
                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="10">
                    <div class="empty-state">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                      </svg>
                      <p>Tidak ada peserta yang sesuai filter.</p>
                    </div>
                  </td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="table-footer">
          <div class="table-info">
            Menampilkan {{ $participants->firstItem() ?? 0 }}–{{ $participants->lastItem() ?? 0 }}
            dari {{ $participants->total() }} peserta
          </div>
          <div class="pagination-links">
            {{ $participants->appends(request()->query())->links() }}
          </div>
        </div>
      </div>

    </div>
  </div>

</x-app-layout>