<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Verified — IYF 2026</title>
</head>
<body style="margin:0; padding:0; background:#FAF7F0; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#FAF7F0; padding:40px 20px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px; width:100%;">

          {{-- ── HEADER ── --}}
          <tr>
            <td style="background:#1B4332; border-radius:16px 16px 0 0; padding:32px 40px;">
              <p style="margin:0 0 6px; font-size:10px; font-weight:500; letter-spacing:0.22em; text-transform:uppercase; color:#E8933A;">
                Universitas Wahid Hasyim Semarang
              </p>
              <p style="margin:0 0 4px; font-size:24px; font-weight:700; color:#ffffff; font-family:Georgia,serif; letter-spacing:-0.01em;">
                International Yoga Festival 2026
              </p>
              <p style="margin:0; font-size:13px; color:rgba(255,255,255,0.45);">
                Saturday, 20 June 2026 · 06.30 WIB · UNWAHAS Stadium
              </p>
            </td>
          </tr>

          {{-- ── PERFORATION ── --}}
          <tr>
            <td style="background:#ffffff; border-left:1px solid #E4DDD0; border-right:1px solid #E4DDD0;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="22" style="background:#FAF7F0; border-radius:0 0 50% 50%; border:1px solid #E4DDD0; border-top:none; width:22px; height:11px;"></td>
                  <td style="border-top:2px dashed #E4DDD0;"></td>
                  <td width="22" style="background:#FAF7F0; border-radius:0 0 50% 50%; border:1px solid #E4DDD0; border-top:none; width:22px; height:11px;"></td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- ── BODY ── --}}
          <tr>
            <td style="background:#ffffff; border-left:1px solid #E4DDD0; border-right:1px solid #E4DDD0; padding:32px 40px;">

              {{-- Verified badge --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
                <tr>
                  <td align="center">
                    <div style="display:inline-block; background:#D8F3DC; border:1px solid #52B788; border-radius:100px; padding:8px 24px;">
                      <span style="font-size:13px; font-weight:500; color:#1B4332; letter-spacing:0.04em;">
                        ✓ &nbsp;Payment Verified
                      </span>
                    </div>
                  </td>
                </tr>
              </table>

              {{-- Greeting --}}
              <p style="margin:0 0 6px; font-size:13px; color:#999;">Hello,</p>
              <p style="margin:0 0 20px; font-size:24px; font-weight:700; color:#1B4332; font-family:Georgia,serif;">
                {{ $participant->name }} 🎉
              </p>

              <p style="margin:0 0 28px; font-size:14px; color:#4A4A4A; line-height:1.75;">
                Great news! Your payment for <strong>International Yoga Festival 2026</strong> has been
                successfully verified. Your spot is now confirmed — we look forward to seeing you on the mat!
              </p>

              {{-- Registration Code --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                <tr>
                  <td align="center" style="background:#FAF7F0; border:1px solid #E4DDD0; border-radius:12px; padding:20px;">
                    <p style="margin:0 0 6px; font-size:10px; font-weight:500; letter-spacing:0.2em; text-transform:uppercase; color:#999;">
                      Registration Number
                    </p>
                    <p style="margin:0; font-size:30px; font-weight:700; color:#1B4332; font-family:Georgia,serif; letter-spacing:0.08em;">
                      {{ $participant->registration_code }}
                    </p>
                  </td>
                </tr>
              </table>

              {{-- Details --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                <tr>
                  <td width="50%" style="padding:0 8px 16px 0; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#999;">Full Name</p>
                    <p style="margin:0; font-size:14px; font-weight:500; color:#1C1C1C;">{{ $participant->name }}</p>
                  </td>
                  <td width="50%" style="padding:0 0 16px 8px; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#999;">Email</p>
                    <p style="margin:0; font-size:13px; font-weight:500; color:#1C1C1C; word-break:break-all;">{{ $participant->email }}</p>
                  </td>
                </tr>
                <tr>
                  <td width="50%" style="padding:0 8px 0 0; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#999;">Payment Status</p>
                    <span style="display:inline-block; background:#D8F3DC; border:1px solid #52B788; color:#1B4332; padding:4px 12px; border-radius:100px; font-size:12px; font-weight:500;">
                      ✓ PAID
                    </span>
                  </td>
                  <td width="50%" style="padding:0 0 0 8px; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#999;">Event Date</p>
                    <p style="margin:0; font-size:14px; font-weight:500; color:#1C1C1C;">Saturday, 20 June 2026</p>
                  </td>
                </tr>
              </table>

              {{-- Info chips --}}
              <table cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                <tr>
                  <td style="background:#F3F0E8; border:1px solid #E4DDD0; border-radius:100px; padding:5px 14px; font-size:12px; color:#4A4A4A; font-weight:500; white-space:nowrap;">
                    📍 UNWAHAS Stadium, Gunungpati
                  </td>
                  <td width="8"></td>
                  <td style="background:#F3F0E8; border:1px solid #E4DDD0; border-radius:100px; padding:5px 14px; font-size:12px; color:#4A4A4A; font-weight:500; white-space:nowrap;">
                    ⏰ Gate opens 05.30 WIB
                  </td>
                  <td width="8"></td>
                  <td style="background:#F3F0E8; border:1px solid #E4DDD0; border-radius:100px; padding:5px 14px; font-size:12px; color:#4A4A4A; font-weight:500; white-space:nowrap;">
                    👕 T-shirt &amp; yoga mat included
                  </td>
                </tr>
              </table>

              {{-- CTA Button --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:32px;">
                <tr>
                  <td align="center">
                    <a href="{{ url('/participant/'.$participant->portal_token) }}"
                       style="display:inline-block; background:#E8933A; color:#1B4332; text-decoration:none; font-size:14px; font-weight:600; padding:14px 40px; border-radius:6px; letter-spacing:0.05em; text-transform:uppercase;">
                      Open Participant Dashboard →
                    </a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          {{-- ── COUNTDOWN SECTION ── --}}
          <tr>
            <td style="background:#1B4332; border-left:1px solid #1B4332; border-right:1px solid #1B4332; padding:32px 40px; text-align:center;">

              <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.22em; text-transform:uppercase; color:#E8933A;">
                — Event starts in —
              </p>
              <p style="margin:0 0 24px; font-size:13px; color:rgba(255,255,255,0.35); font-style:italic; font-family:Georgia,serif;">
                Saturday, 20 June 2026 · 06.30 WIB
              </p>

              {{-- Countdown boxes (static fallback for email clients, dynamic via JS for webview) --}}
              <table cellpadding="0" cellspacing="0" align="center" style="margin:0 auto 8px;">
                <tr>
                  <td align="center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(232,147,58,0.22); border-radius:10px; width:72px; height:72px; text-align:center; vertical-align:middle;">
                    <p id="em-days" style="margin:0; font-size:34px; font-weight:700; color:#ffffff; font-family:Georgia,serif; line-height:1;">19</p>
                  </td>
                  <td style="padding:0 6px; font-size:28px; color:rgba(232,147,58,0.35); font-family:Georgia,serif; font-weight:700; vertical-align:middle;">:</td>
                  <td align="center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(232,147,58,0.22); border-radius:10px; width:72px; height:72px; text-align:center; vertical-align:middle;">
                    <p id="em-hours" style="margin:0; font-size:34px; font-weight:700; color:#ffffff; font-family:Georgia,serif; line-height:1;">00</p>
                  </td>
                  <td style="padding:0 6px; font-size:28px; color:rgba(232,147,58,0.35); font-family:Georgia,serif; font-weight:700; vertical-align:middle;">:</td>
                  <td align="center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(232,147,58,0.22); border-radius:10px; width:72px; height:72px; text-align:center; vertical-align:middle;">
                    <p id="em-mins" style="margin:0; font-size:34px; font-weight:700; color:#ffffff; font-family:Georgia,serif; line-height:1;">00</p>
                  </td>
                  <td style="padding:0 6px; font-size:28px; color:rgba(232,147,58,0.35); font-family:Georgia,serif; font-weight:700; vertical-align:middle;">:</td>
                  <td align="center" style="background:rgba(255,255,255,0.06); border:1px solid rgba(232,147,58,0.22); border-radius:10px; width:72px; height:72px; text-align:center; vertical-align:middle;">
                    <p id="em-secs" style="margin:0; font-size:34px; font-weight:700; color:#ffffff; font-family:Georgia,serif; line-height:1;">00</p>
                  </td>
                </tr>
              </table>

              {{-- Labels --}}
              <table cellpadding="0" cellspacing="0" align="center" style="margin:0 auto 28px;">
                <tr>
                  <td width="72" style="text-align:center; font-size:9px; font-weight:500; letter-spacing:0.18em; text-transform:uppercase; color:rgba(255,255,255,0.3); padding-top:8px;">Days</td>
                  <td width="40"></td>
                  <td width="72" style="text-align:center; font-size:9px; font-weight:500; letter-spacing:0.18em; text-transform:uppercase; color:rgba(255,255,255,0.3); padding-top:8px;">Hours</td>
                  <td width="40"></td>
                  <td width="72" style="text-align:center; font-size:9px; font-weight:500; letter-spacing:0.18em; text-transform:uppercase; color:rgba(255,255,255,0.3); padding-top:8px;">Minutes</td>
                  <td width="40"></td>
                  <td width="72" style="text-align:center; font-size:9px; font-weight:500; letter-spacing:0.18em; text-transform:uppercase; color:rgba(255,255,255,0.3); padding-top:8px;">Seconds</td>
                </tr>
              </table>

              {{-- Add to Calendar buttons --}}
              <table cellpadding="0" cellspacing="0" align="center">
                <tr>
                  <td>
                    <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=International+Yoga+Festival+2026&dates=20260619T233000Z%2F20260620T020000Z&details=Yoga+for+Healthy+Ageing+%E2%80%94+led+by+Anjasmara.+Gate+opens+05.30+WIB.+Hadir+paling+lambat+05.45+WIB.+Yoga+mat+disediakan+panitia.&location=Football+Field+Campus+2%2C+Universitas+Wahid+Hasyim%2C+Gunungpati%2C+Semarang"
                       target="_blank"
                       style="display:inline-block; background:rgba(255,255,255,0.1); border:1px solid rgba(232,147,58,0.35); color:rgba(255,255,255,0.8); text-decoration:none; font-size:12px; font-weight:500; padding:10px 18px; border-radius:6px; letter-spacing:0.04em;">
                      🗓️ Google Calendar
                    </a>
                  </td>
                  <td width="10"></td>
                  {{-- <td>
                    <a href="{{ route('event.ics') }}"
                       style="display:inline-block; background:rgba(255,255,255,0.1); border:1px solid rgba(232,147,58,0.35); color:rgba(255,255,255,0.8); text-decoration:none; font-size:12px; font-weight:500; padding:10px 18px; border-radius:6px; letter-spacing:0.04em;">
                      🍎 Apple / iCal
                    </a>
                  </td> --}}
                  <td width="10"></td>
                  <td>
                    <a href="https://outlook.live.com/calendar/0/deeplink/compose?rru=addevent&subject=International+Yoga+Festival+2026&startdt=2026-06-20T06%3A30%3A00&enddt=2026-06-20T09%3A00%3A00&location=UNWAHAS+Stadium+Gunungpati+Semarang&body=Yoga+for+Healthy+Ageing"
                       target="_blank"
                       style="display:inline-block; background:rgba(255,255,255,0.1); border:1px solid rgba(232,147,58,0.35); color:rgba(255,255,255,0.8); text-decoration:none; font-size:12px; font-weight:500; padding:10px 18px; border-radius:6px; letter-spacing:0.04em;">
                      📘 Outlook
                    </a>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          {{-- ── IMPORTANT NOTICE ── --}}
          <tr>
            <td style="background:#FDF0E2; border-top:3px solid #E8933A; border-left:1px solid #F5D5A8; border-right:1px solid #F5D5A8; padding:28px 40px;">

              <p style="margin:0 0 16px; font-size:14px; font-weight:700; color:#1B4332; font-family:Georgia,serif;">
                ⚠️ Penting untuk Peserta
              </p>

              {{-- Notice item 1 --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
                <tr>
                  <td style="background:#ffffff; border:1px solid rgba(232,147,58,0.25); border-left:4px solid #E8933A; border-radius:0 8px 8px 0; padding:14px 16px;">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td width="32" style="vertical-align:top; font-size:22px; padding-right:12px;">🚗</td>
                        <td style="vertical-align:top;">
                          <p style="margin:0 0 4px; font-size:13px; font-weight:600; color:#1B4332;">Diusahakan Tidak Membawa Mobil</p>
                          <p style="margin:0; font-size:12px; color:#4A4A4A; line-height:1.6;">Kapasitas parkir terbatas untuk <strong style="color:#C4711E;">2.000 peserta</strong>. Sangat disarankan menggunakan <strong style="color:#C4711E;">motor, angkutan umum, atau datang bersama rombongan</strong> untuk menghindari kemacetan di area Campus 2.</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              {{-- Notice item 2 --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
                <tr>
                  <td style="background:#ffffff; border:1px solid rgba(232,147,58,0.25); border-left:4px solid #E8933A; border-radius:0 8px 8px 0; padding:14px 16px;">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td width="32" style="vertical-align:top; font-size:22px; padding-right:12px;">⏰</td>
                        <td style="vertical-align:top;">
                          <p style="margin:0 0 4px; font-size:13px; font-weight:600; color:#1B4332;">Datang Tepat Waktu — Paling Lambat 05.45 WIB</p>
                          <p style="margin:0; font-size:12px; color:#4A4A4A; line-height:1.6;">Gate dibuka pukul <strong style="color:#C4711E;">05.30 WIB</strong>. Wajib hadir paling lambat <strong style="color:#C4711E;">05.45 WIB</strong> untuk registrasi ulang, pengambilan wristband, kaos, dan penempatan yoga mat sebelum Opening Ceremony pukul 06.00 WIB.</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              {{-- Notice item 3 --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:12px;">
                <tr>
                  <td style="background:#ffffff; border:1px solid rgba(232,147,58,0.25); border-left:4px solid #E8933A; border-radius:0 8px 8px 0; padding:14px 16px;">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td width="32" style="vertical-align:top; font-size:22px; padding-right:12px;">🪪</td>
                        <td style="vertical-align:top;">
                          <p style="margin:0 0 4px; font-size:13px; font-weight:600; color:#1B4332;">Wristband Wajib Dipakai</p>
                          <p style="margin:0; font-size:12px; color:#4A4A4A; line-height:1.6;">Gelang peserta adalah <strong style="color:#C4711E;">identitas resmi</strong> untuk memasuki area kegiatan dan mendapatkan seluruh fasilitas dari panitia. Wajib dipakai sepanjang acara.</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              {{-- Notice item 4 --}}
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="background:#ffffff; border:1px solid rgba(232,147,58,0.25); border-left:4px solid #E8933A; border-radius:0 8px 8px 0; padding:14px 16px;">
                    <table cellpadding="0" cellspacing="0" width="100%">
                      <tr>
                        <td width="32" style="vertical-align:top; font-size:22px; padding-right:12px;">☀️</td>
                        <td style="vertical-align:top;">
                          <p style="margin:0 0 4px; font-size:13px; font-weight:600; color:#1B4332;">Acara di Luar Ruangan</p>
                          <p style="margin:0; font-size:12px; color:#4A4A4A; line-height:1.6;">Event dilaksanakan <strong style="color:#C4711E;">outdoor</strong>. Siapkan <strong style="color:#C4711E;">sunscreen, topi/pelindung kepala</strong>, dan bawa <strong style="color:#C4711E;">payung lipat atau jas hujan ringan</strong> sebagai antisipasi perubahan cuaca.</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          {{-- ── PERFORATION BOTTOM ── --}}
          <tr>
            <td style="background:#ffffff; border-left:1px solid #E4DDD0; border-right:1px solid #E4DDD0;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="22" style="background:#FAF7F0; border-radius:50% 50% 0 0; border:1px solid #E4DDD0; border-bottom:none; width:22px; height:11px;"></td>
                  <td style="border-bottom:2px dashed #E4DDD0;"></td>
                  <td width="22" style="background:#FAF7F0; border-radius:50% 50% 0 0; border:1px solid #E4DDD0; border-bottom:none; width:22px; height:11px;"></td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- ── FOOTER NOTE ── --}}
          <tr>
            <td style="background:#ffffff; border-left:1px solid #E4DDD0; border-right:1px solid #E4DDD0; padding:24px 40px 32px;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td align="center">
                    <p style="margin:0; font-size:12px; color:#999; line-height:1.7; text-align:center;">
                      Save your registration number <strong style="color:#1B4332;">{{ $participant->registration_code }}</strong> — you'll need it for on-site check-in.<br>
                      Questions? Contact <a href="https://wa.me/6281329536201" style="color:#2D6A4F; text-decoration:none; font-weight:500;">Bu Eva · 081329536201</a>
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- ── FOOTER ── --}}
          <tr>
            <td style="background:#0E2B1E; border-radius:0 0 16px 16px; padding:20px 40px; text-align:center;">
              <p style="margin:0 0 4px; font-size:12px; color:rgba(255,255,255,0.35);">
                © 2026 International Office &amp; Partnership
              </p>
              <p style="margin:0; font-size:12px; color:rgba(255,255,255,0.2);">
                Universitas Wahid Hasyim Semarang
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

  {{-- Countdown script — only runs in webview/browser, ignored by email clients --}}
  <script>
  (function() {
    var target = new Date('2026-06-20T06:30:00+07:00').getTime();
    var ids = { d: 'em-days', h: 'em-hours', m: 'em-mins', s: 'em-secs' };
    function pad(n) { return String(Math.max(0, n)).padStart(2, '0'); }
    function tick() {
      var diff = target - Date.now();
      if (diff <= 0) return;
      var el;
      el = document.getElementById(ids.d); if (el) el.textContent = pad(Math.floor(diff / 86400000));
      el = document.getElementById(ids.h); if (el) el.textContent = pad(Math.floor((diff % 86400000) / 3600000));
      el = document.getElementById(ids.m); if (el) el.textContent = pad(Math.floor((diff % 3600000) / 60000));
      el = document.getElementById(ids.s); if (el) el.textContent = pad(Math.floor((diff % 60000) / 1000));
    }
    tick(); setInterval(tick, 1000);
  })();
  </script>

</body>
</html>