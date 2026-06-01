<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Successful — IYF 2026</title>
</head>
<body style="margin:0; padding:0; background:#FAF7F0; font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#FAF7F0; padding: 40px 20px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px; width:100%;">

          {{-- Header --}}
          <tr>
            <td style="background:#1A3A2A; border-radius:16px 16px 0 0; padding:32px 40px;">
              <p style="margin:0 0 6px; font-size:10px; font-weight:500; letter-spacing:0.2em; text-transform:uppercase; color:#C9A84C;">
                Universitas Wahid Hasyim Semarang
              </p>
              <p style="margin:0 0 4px; font-size:22px; font-weight:700; color:#ffffff; font-family:Georgia,serif;">
                International Yoga Festival 2026
              </p>
              <p style="margin:0; font-size:13px; color:rgba(255,255,255,0.5);">
                Saturday, 20 June 2026 · 06.30 WIB · UNWAHAS Stadium
              </p>
            </td>
          </tr>

          {{-- Perforation --}}
          <tr>
            <td style="background:#ffffff; padding:0 0; border-left:1px solid #E4DDD0; border-right:1px solid #E4DDD0;">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="22" style="background:#FAF7F0; border-radius:0 0 50% 50%; border:1px solid #E4DDD0; border-top:none; width:22px; height:11px;"></td>
                  <td style="border-top:2px dashed #E4DDD0;"></td>
                  <td width="22" style="background:#FAF7F0; border-radius:0 0 50% 50%; border:1px solid #E4DDD0; border-top:none; width:22px; height:11px;"></td>
                </tr>
              </table>
            </td>
          </tr>

          {{-- Body --}}
          <tr>
            <td style="background:#ffffff; border-left:1px solid #E4DDD0; border-right:1px solid #E4DDD0; padding:32px 40px;">

              {{-- Greeting --}}
              <p style="margin:0 0 6px; font-size:13px; color:#888;">
                Hello,
              </p>
              <p style="margin:0 0 24px; font-size:22px; font-weight:700; color:#1A3A2A; font-family:Georgia,serif;">
                {{ $participant->name }} 🎉
              </p>

              <p style="margin:0 0 28px; font-size:14px; color:#4A4A4A; line-height:1.7;">
                Your registration for <strong>International Yoga Festival 2026</strong> has been successfully received.
                @if($participant->payment_status != 'paid')
                  Your payment proof is currently being reviewed by the committee. Verification may take up to <strong>1×24 hours</strong>.
                @endif
              </p>

              {{-- Registration Code --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                <tr>
                  <td align="center" style="background:#FAF7F0; border:1px solid #E4DDD0; border-radius:12px; padding:20px;">
                    <p style="margin:0 0 6px; font-size:10px; font-weight:500; letter-spacing:0.2em; text-transform:uppercase; color:#888;">
                      Registration Number
                    </p>
                    <p style="margin:0; font-size:28px; font-weight:700; color:#1A3A2A; font-family:Georgia,serif; letter-spacing:0.06em;">
                      {{ $participant->registration_code }}
                    </p>
                  </td>
                </tr>
              </table>

              {{-- Details --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                <tr>
                  <td width="50%" style="padding:0 8px 16px 0; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#888;">Full Name</p>
                    <p style="margin:0; font-size:14px; font-weight:500; color:#1C1C1C;">{{ $participant->name }}</p>
                  </td>
                  <td width="50%" style="padding:0 0 16px 8px; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#888;">Email</p>
                    <p style="margin:0; font-size:13px; font-weight:500; color:#1C1C1C; word-break:break-all;">{{ $participant->email }}</p>
                  </td>
                </tr>
                <tr>
                  <td width="50%" style="padding:0 8px 0 0; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#888;">Payment Status</p>
                    @if($participant->payment_status == 'paid')
                      <span style="display:inline-block; background:#EAF5EE; border:1px solid #7DC99A; color:#1A5C30; padding:4px 12px; border-radius:100px; font-size:12px; font-weight:500;">
                        ✓ PAID
                      </span>
                    @else
                      <span style="display:inline-block; background:#FEF3E8; border:1px solid #F0C078; color:#92510A; padding:4px 12px; border-radius:100px; font-size:12px; font-weight:500;">
                        ⏳ Menunggu Verifikasi
                      </span>
                    @endif
                  </td>
                  <td width="50%" style="padding:0 0 0 8px; vertical-align:top;">
                    <p style="margin:0 0 4px; font-size:10px; font-weight:500; letter-spacing:0.15em; text-transform:uppercase; color:#888;">Event Date</p>
                    <p style="margin:0; font-size:14px; font-weight:500; color:#1C1C1C;">20 June 2026</p>
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
              <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                <tr>
                  <td align="center">
                    <a href="{{ url('/participant/'.$participant->portal_token) }}"
                       style="display:inline-block; background:#C9A84C; color:#1A3A2A; text-decoration:none; font-size:15px; font-weight:500; padding:14px 40px; border-radius:8px; letter-spacing:0.04em;">
                      Open Participant Dashboard →
                    </a>
                  </td>
                </tr>
              </table>

              {{-- Footer note --}}
              <table width="100%" cellpadding="0" cellspacing="0" style="border-top:1px solid #E4DDD0; padding-top:20px;">
                <tr>
                  <td align="center" style="padding-top:20px;">
                    <p style="margin:0; font-size:12px; color:#888; line-height:1.6; text-align:center;">
                      Save your registration number <strong style="color:#1A3A2A;">{{ $participant->registration_code }}</strong> — you'll need it for on-site check-in.<br>
                      Questions? Contact <a href="https://wa.me/6281329536201" style="color:#4A8C62; text-decoration:none;">Bu Eva · 081329536201</a>
                    </p>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          {{-- Footer --}}
          <tr>
            <td style="background:#0F2318; border-radius:0 0 16px 16px; padding:20px 40px; text-align:center;">
              <p style="margin:0 0 4px; font-size:12px; color:rgba(255,255,255,0.4);">
                © 2026 International Office &amp; Partnership
              </p>
              <p style="margin:0; font-size:12px; color:rgba(255,255,255,0.3);">
                Universitas Wahid Hasyim Semarang
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>