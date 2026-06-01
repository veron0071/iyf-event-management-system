<x-app-layout>

<style>
  .scanner-page {
    min-height: 100vh;
    background: #0F1F16;
    padding: 40px 20px;
    font-family: 'DM Sans', sans-serif;
  }

  .scanner-wrap {
    max-width: 500px;
    margin: 0 auto;
  }

  .scanner-header {
    text-align: center;
    margin-bottom: 32px;
  }

  .scanner-eyebrow {
    font-size: 11px;
    font-weight: 500;
    letter-spacing: 0.22em;
    text-transform: uppercase;
    color: #C9A84C;
    margin-bottom: 10px;
  }

  .scanner-title {
    font-size: 28px;
    font-weight: 700;
    color: #ffffff;
    font-family: Georgia, serif;
  }

  .scanner-sub {
    font-size: 13px;
    color: rgba(255,255,255,0.4);
    margin-top: 6px;
  }

  .scanner-box {
    border-radius: 20px;
    overflow: hidden;
    border: 2px solid rgba(201,168,76,0.3);
    background: #000;
    position: relative;
  }

  #reader { width: 100% !important; }
  #reader video { width: 100% !important; border-radius: 0 !important; }
  #reader__scan_region img { display: none !important; }
  #reader__dashboard { display: none !important; }

  .scanner-corners {
    position: absolute; inset: 0;
    pointer-events: none; z-index: 10;
  }

  .scanner-corners::before,
  .scanner-corners::after {
    content: '';
    position: absolute;
    width: 40px; height: 40px;
    border-color: #C9A84C; border-style: solid;
  }

  .scanner-corners::before {
    top: 16px; left: 16px;
    border-width: 3px 0 0 3px;
    border-radius: 4px 0 0 0;
  }

  .scanner-corners::after {
    bottom: 16px; right: 16px;
    border-width: 0 3px 3px 0;
    border-radius: 0 0 4px 0;
  }

  .scanner-corner-tr {
    position: absolute; top: 16px; right: 16px;
    width: 40px; height: 40px;
    border-top: 3px solid #C9A84C;
    border-right: 3px solid #C9A84C;
    border-radius: 0 4px 0 0;
    pointer-events: none; z-index: 10;
  }

  .scanner-corner-bl {
    position: absolute; bottom: 16px; left: 16px;
    width: 40px; height: 40px;
    border-bottom: 3px solid #C9A84C;
    border-left: 3px solid #C9A84C;
    border-radius: 0 0 0 4px;
    pointer-events: none; z-index: 10;
  }

  /* Result card */
  .result-card {
    margin-top: 20px;
    border-radius: 16px;
    padding: 24px;
    display: none;
    animation: slideUp 0.3s ease;
  }

  @keyframes slideUp {
    from { opacity: 0; transform: translateY(12px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .result-card.success { background: #EAF5EE; border: 1px solid #7DC99A; }
  .result-card.error   { background: #FDECEA; border: 1px solid #F5A8A0; }
  .result-card.warning { background: #FEF3E8; border: 1px solid #F0C078; }

  .result-icon { font-size: 32px; margin-bottom: 10px; }

  .result-status {
    font-size: 11px; font-weight: 600;
    letter-spacing: 0.18em; text-transform: uppercase; margin-bottom: 6px;
  }

  .result-card.success .result-status { color: #1A5C30; }
  .result-card.error   .result-status { color: #922B1A; }
  .result-card.warning .result-status { color: #92510A; }

  .result-name {
    font-size: 22px; font-weight: 700;
    font-family: Georgia, serif; margin-bottom: 4px;
  }

  .result-card.success .result-name { color: #1A3A2A; }
  .result-card.error   .result-name { color: #7A1A10; }
  .result-card.warning .result-name { color: #7A3F08; }

  .result-code {
    font-size: 13px; font-weight: 500;
    opacity: 0.6; margin-bottom: 16px;
  }

  /* Detail grid */
  .result-detail {
    display: none;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
    margin-bottom: 16px;
    padding: 14px 16px;
    background: rgba(0,0,0,0.06);
    border-radius: 10px;
  }

  .detail-item-label {
    font-size: 10px; font-weight: 600;
    letter-spacing: 0.15em; text-transform: uppercase;
    opacity: 0.5; margin-bottom: 3px;
  }

  .detail-item-value {
    font-size: 13px; font-weight: 500;
  }

  /* Reset bar */
  .result-reset {
    font-size: 12px; color: rgba(0,0,0,0.4);
    display: flex; align-items: center; gap: 8px;
  }

  .reset-bar {
    flex: 1; height: 3px; border-radius: 2px;
    background: rgba(0,0,0,0.1); overflow: hidden;
  }

  .reset-bar-fill {
    height: 100%; border-radius: 2px;
    background: rgba(0,0,0,0.25);
    width: 0%; transition: width 3s linear;
  }

  /* Stats */
  .stats-row {
    display: flex; gap: 12px; margin-top: 20px;
  }

  .stat-card {
    flex: 1;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px; padding: 16px; text-align: center;
  }

  .stat-num {
    font-size: 28px; font-weight: 700;
    color: #fff; font-family: Georgia, serif;
  }

  .stat-label {
    font-size: 10px; font-weight: 500;
    letter-spacing: 0.15em; text-transform: uppercase;
    color: rgba(255,255,255,0.35); margin-top: 4px;
  }

  .stat-card.gold .stat-num { color: #C9A84C; }
</style>

<div class="scanner-page">
  <div class="scanner-wrap">

    <div class="scanner-header">
      <p class="scanner-eyebrow">International Yoga Festival 2026</p>
      <h1 class="scanner-title">QR Check-In Scanner</h1>
      <p class="scanner-sub">Arahkan kamera ke QR code peserta</p>
    </div>

    <div class="scanner-box" id="scanner-box">
      <div class="scanner-corners"></div>
      <div class="scanner-corner-tr"></div>
      <div class="scanner-corner-bl"></div>
      <div id="reader"></div>
    </div>

    <div class="result-card" id="result-card">
      <div class="result-icon"   id="result-icon"></div>
      <div class="result-status" id="result-status"></div>
      <div class="result-name"   id="result-name"></div>
      <div class="result-code"   id="result-code"></div>

      <div class="result-detail" id="result-detail">
        <div class="detail-item">
          <div class="detail-item-label">Kota</div>
          <div class="detail-item-value" id="detail-city"></div>
        </div>
        <div class="detail-item">
          <div class="detail-item-label">Gender</div>
          <div class="detail-item-value" id="detail-gender"></div>
        </div>
        <div class="detail-item">
          <div class="detail-item-label">Ukuran Kaos</div>
          <div class="detail-item-value" id="detail-shirt"></div>
        </div>
        <div class="detail-item">
          <div class="detail-item-label">Tipe Peserta</div>
          <div class="detail-item-value" id="detail-type"></div>
        </div>
      </div>

      <div class="result-reset">
        <span>Scan berikutnya dalam 3 detik</span>
        <div class="reset-bar">
          <div class="reset-bar-fill" id="reset-bar-fill"></div>
        </div>
      </div>
    </div>

    <div class="stats-row">
      <div class="stat-card gold">
        <div class="stat-num" id="stat-success">0</div>
        <div class="stat-label">Berhasil</div>
      </div>
      <div class="stat-card">
        <div class="stat-num" id="stat-fail">0</div>
        <div class="stat-label">Gagal / Ditolak</div>
      </div>
    </div>

  </div>
</div>

<script src="https://unpkg.com/html5-qrcode"></script>

<script>
  let successCount = 0;
  let failCount    = 0;
  let isProcessing = false;

  const html5QrCode = new Html5Qrcode("reader");

  function startScanner() {
    Html5Qrcode.getCameras().then(devices => {
      if (!devices.length) return;

      const cam = devices.find(d =>
        d.label.toLowerCase().includes('back') ||
        d.label.toLowerCase().includes('rear')
      ) || devices[0];

      html5QrCode.start(
        cam.id,
        { fps: 10, qrbox: { width: 240, height: 240 } },
        onScanSuccess
      );
    });
  }

  function onScanSuccess(decodedText) {
    if (isProcessing) return;
    isProcessing = true;

    html5QrCode.pause();

    fetch('/admin/scanner/checkin', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ token: decodedText })
    })
    .then(r => r.json())
    .then(data => showResult(data))
    .catch(() => showResult({
      success: false,
      message: 'Koneksi bermasalah, coba lagi.'
    }));
  }

  function showResult(data) {
    const card    = document.getElementById('result-card');
    const icon    = document.getElementById('result-icon');
    const status  = document.getElementById('result-status');
    const name    = document.getElementById('result-name');
    const code    = document.getElementById('result-code');
    const detail  = document.getElementById('result-detail');
    const barFill = document.getElementById('reset-bar-fill');

    card.className = 'result-card';
    detail.style.display = 'none';

    if (data.success) {
      card.classList.add('success');
      icon.textContent   = '✅';
      status.textContent = 'Check-In Berhasil';
      name.textContent   = data.name;
      code.textContent   = data.code;

      document.getElementById('detail-city').textContent   = data.city   ?? '-';
      document.getElementById('detail-gender').textContent = data.gender ?? '-';
      document.getElementById('detail-shirt').textContent  = data.shirt  ?? '-';
      document.getElementById('detail-type').textContent   = data.type   ?? '-';
      detail.style.display = 'grid';

      successCount++;
      document.getElementById('stat-success').textContent = successCount;

    } else {
      const isWarning = data.message === 'Already checked in';
      card.classList.add(isWarning ? 'warning' : 'error');
      icon.textContent   = isWarning ? '⚠️' : '❌';
      status.textContent = isWarning ? 'Sudah Check-In' : 'Gagal';
      name.textContent   =
        data.message === 'Participant not found'  ? 'Peserta tidak ditemukan'    :
        data.message === 'Payment not verified'   ? 'Pembayaran belum diverifikasi' :
        data.message === 'Already checked in'     ? (data.name ?? 'Peserta sudah check-in') :
        data.message;
      code.textContent = data.code ?? '';

      failCount++;
      document.getElementById('stat-fail').textContent = failCount;
    }

    card.style.display = 'block';

    setTimeout(() => { barFill.style.width = '100%'; }, 50);

    setTimeout(() => {
      card.style.display       = 'none';
      detail.style.display     = 'none';
      barFill.style.width      = '0%';
      barFill.style.transition = 'none';
      setTimeout(() => {
        barFill.style.transition = 'width 3s linear';
      }, 50);
      html5QrCode.resume();
      isProcessing = false;
    }, 3000);
  }

  startScanner();
</script>

</x-app-layout>