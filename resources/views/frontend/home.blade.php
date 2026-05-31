<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>International Yoga Festival 2026</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --gold: #C9A84C;
  --gold-light: #F0D589;
  --gold-pale: #FBF3D8;
  --forest: #1A3A2A;
  --forest-mid: #2D5C40;
  --forest-light: #4A8C62;
  --cream: #FAF7F0;
  --white: #FFFFFF;
  --text-dark: #1C1C1C;
  --text-mid: #4A4A4A;
  --text-muted: #7A7A7A;
  --border: #E4DDD0;
}

body {
  font-family: 'DM Sans', sans-serif;
  background: var(--cream);
  color: var(--text-dark);
  overflow-x: hidden;
}

/* ── HERO ── */
.hero {
  background: var(--forest);
  position: relative;
  overflow: hidden;
}
.hero-glow-1 {
  position: absolute; top: -100px; right: -100px;
  width: 600px; height: 600px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,168,76,0.14) 0%, transparent 65%);
  pointer-events: none;
}
.hero-glow-2 {
  position: absolute; bottom: -80px; left: -80px;
  width: 400px; height: 400px; border-radius: 50%;
  background: radial-gradient(circle, rgba(74,140,98,0.12) 0%, transparent 65%);
  pointer-events: none;
}
.hero-inner {
  max-width: 1160px; margin: 0 auto;
  padding: 72px 48px 88px;
  display: grid; grid-template-columns: 1fr 420px;
  gap: 64px; align-items: center;
  position: relative; z-index: 1;
}
.partner-logos {
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 36px; flex-wrap: wrap;
}
.partner-logos img {
  height: 44px; background: rgba(255,255,255,0.9);
  border-radius: 8px; padding: 6px 10px;
  object-fit: contain;
}
.hero-eyebrow {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--gold); margin-bottom: 18px;
}
.hero-title {
  font-family: 'Playfair Display', serif;
  font-size: 58px; line-height: 1.05; font-weight: 700;
  color: var(--white); margin-bottom: 12px;
}
.hero-title em { color: var(--gold-light); font-style: italic; }
.hero-theme {
  font-family: 'Playfair Display', serif;
  font-size: 22px; color: var(--gold-light);
  font-style: italic; margin-bottom: 16px; font-weight: 400;
}
.hero-tagline {
  font-size: 15px; font-weight: 300;
  color: rgba(255,255,255,0.62); line-height: 1.75;
  margin-bottom: 32px; max-width: 420px;
}
.hero-collab {
  background: rgba(255,255,255,0.06);
  border-left: 3px solid var(--gold);
  border-radius: 0 8px 8px 0;
  padding: 14px 20px; margin-bottom: 40px;
  font-size: 13px; color: rgba(255,255,255,0.7); line-height: 1.7;
}
.hero-collab strong { color: var(--white); font-weight: 500; }
.hero-btns { display: flex; gap: 14px; flex-wrap: wrap; }
.btn-gold {
  background: var(--gold); color: var(--forest);
  padding: 14px 34px; border-radius: 6px;
  font-weight: 500; font-size: 14px;
  text-decoration: none; letter-spacing: 0.03em;
  transition: background 0.2s; display: inline-block;
}
.btn-gold:hover { background: var(--gold-light); }
.btn-ghost {
  border: 1px solid rgba(255,255,255,0.3);
  color: var(--white); padding: 14px 28px;
  border-radius: 6px; font-size: 14px;
  text-decoration: none; transition: all 0.2s; display: inline-block;
}
.btn-ghost:hover { background: rgba(255,255,255,0.07); border-color: rgba(255,255,255,0.55); }

/* Poster / image */
.hero-poster {
  position: relative;
}
.hero-poster::before {
  content: '';
  position: absolute; inset: -18px;
  border: 1px solid rgba(201,168,76,0.28);
  border-radius: 26px; transform: rotate(2.5deg);
}
.hero-poster img {
  width: 100%; border-radius: 20px;
  display: block; position: relative; z-index: 1;
}

/* ── INFO BAR ── */
.info-bar { background: var(--gold); }
.info-bar-inner {
  max-width: 1160px; margin: 0 auto;
  display: grid; grid-template-columns: repeat(3, 1fr);
}
.info-cell {
  padding: 26px 36px;
  display: flex; align-items: center; gap: 14px;
  border-right: 1px solid rgba(0,0,0,0.1);
}
.info-cell:last-child { border-right: none; }
.info-cell-icon { font-size: 26px; flex-shrink: 0; }
.info-cell-label {
  font-size: 10px; font-weight: 500;
  text-transform: uppercase; letter-spacing: 0.16em;
  color: rgba(26,58,42,0.55); margin-bottom: 3px;
}
.info-cell-value { font-size: 15px; font-weight: 500; color: var(--forest); }
.info-cell-sub { font-size: 12px; color: rgba(26,58,42,0.6); margin-top: 1px; }

/* ── SECTIONS ── */
.sec { padding: 96px 48px; }
.sec-inner { max-width: 1160px; margin: 0 auto; }
.sec-eye {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--forest-light); margin-bottom: 10px;
}
.sec-title {
  font-family: 'Playfair Display', serif;
  font-size: 40px; font-weight: 700;
  line-height: 1.15; color: var(--forest); margin-bottom: 56px;
}
.sec-title em { color: var(--forest-light); font-style: italic; }
.tc { text-align: center; }

/* ── SCHEDULE ── */
.schedule-sec { background: var(--white); }
.schedule-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 2px; background: var(--border);
  border-radius: 16px; overflow: hidden;
}
.sched-item {
  background: var(--white);
  padding: 28px 24px;
}
.sched-time {
  font-size: 13px; font-weight: 500;
  color: var(--gold); letter-spacing: 0.04em; margin-bottom: 8px;
}
.sched-title {
  font-family: 'Playfair Display', serif;
  font-size: 16px; color: var(--forest); margin-bottom: 6px;
}
.sched-desc { font-size: 13px; color: var(--text-muted); line-height: 1.6; }

/* ── BENEFITS ── */
.benefits-sec { background: var(--cream); }
.benefits-grid {
  display: grid; grid-template-columns: repeat(5, 1fr);
  gap: 2px; background: var(--border);
  border-radius: 16px; overflow: hidden;
}
.benefit-card {
  background: var(--cream); padding: 32px 20px;
  transition: background 0.2s;
}
.benefit-card:hover { background: var(--white); }
.benefit-icon { font-size: 32px; margin-bottom: 14px; display: block; }
.benefit-title {
  font-family: 'Playfair Display', serif;
  font-size: 15px; font-weight: 700;
  color: var(--forest); margin-bottom: 8px;
}
.benefit-text { font-size: 12.5px; color: var(--text-muted); line-height: 1.6; }

/* ── FACILITIES ── */
.facilities-sec { background: var(--white); }
.facilities-row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 16px;
}
.facility-card {
  border: 1px solid var(--border); border-radius: 12px;
  padding: 24px 20px; background: var(--cream);
  display: flex; align-items: flex-start; gap: 14px;
}
.facility-icon { font-size: 24px; flex-shrink: 0; margin-top: 2px; }
.facility-name { font-size: 14px; font-weight: 500; color: var(--forest); margin-bottom: 4px; }
.facility-desc { font-size: 12px; color: var(--text-muted); line-height: 1.5; }

/* ── GUIDELINES ── */
.guidelines-sec { background: var(--cream); }
.guidelines-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 20px;
}
.guideline-card {
  background: var(--white);
  border: 1px solid var(--border);
  border-radius: 14px; padding: 28px 28px;
}
.guideline-head {
  display: flex; align-items: center; gap: 12px; margin-bottom: 18px;
}
.guideline-num {
  width: 32px; height: 32px; border-radius: 50%;
  background: var(--forest); color: var(--gold-light);
  font-size: 13px; font-weight: 500;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.guideline-title {
  font-size: 15px; font-weight: 500; color: var(--forest);
}
.guideline-list { list-style: none; }
.guideline-list li {
  font-size: 13px; color: var(--text-mid);
  padding: 5px 0; border-bottom: 0.5px solid var(--border);
  display: flex; align-items: flex-start; gap: 8px; line-height: 1.55;
}
.guideline-list li:last-child { border-bottom: none; }
.gi-check { color: var(--forest-light); font-size: 14px; flex-shrink: 0; margin-top: 1px; }
.gi-x { color: #C0503A; font-size: 14px; flex-shrink: 0; margin-top: 1px; }

/* ── GUEST ── */
.guest-sec {
  background: var(--forest);
  position: relative; overflow: hidden;
}
.guest-glow {
  position: absolute; top: -80px; right: -80px;
  width: 500px; height: 500px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,168,76,0.1) 0%, transparent 70%);
  pointer-events: none;
}
.guest-inner {
  max-width: 1160px; margin: 0 auto;
  padding: 96px 48px;
  display: grid; grid-template-columns: 1fr 380px;
  gap: 80px; align-items: center;
  position: relative; z-index: 1;
}
.guest-label {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--gold); margin-bottom: 14px;
}
.guest-name {
  font-family: 'Playfair Display', serif;
  font-size: 64px; font-weight: 700;
  color: var(--white); line-height: 1; margin-bottom: 14px;
}
.guest-role {
  font-size: 16px; color: rgba(255,255,255,0.5);
  font-weight: 300; margin-bottom: 28px; line-height: 1.5;
}
.guest-badges { display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 32px; }
.badge {
  background: rgba(201,168,76,0.14);
  border: 1px solid rgba(201,168,76,0.3);
  color: var(--gold-light);
  padding: 6px 16px; border-radius: 100px;
  font-size: 12px; font-weight: 500;
}
.guest-desc {
  font-size: 14px; color: rgba(255,255,255,0.55);
  line-height: 1.75; font-weight: 300;
}
.guest-visual {
  display: flex; justify-content: center; align-items: center;
}
.guest-photo-wrap {
  position: relative;
  width: 360px;
}
.guest-photo-wrap::before {
  content: '';
  position: absolute; inset: -16px;
  border: 1px solid rgba(201,168,76,0.25);
  border-radius: 26px;
  transform: rotate(-2deg);
}
.guest-photo-wrap::after {
  content: '';
  position: absolute; inset: -8px;
  border: 1px solid rgba(201,168,76,0.12);
  border-radius: 22px;
  transform: rotate(1deg);
}
.guest-photo-wrap img {
  width: 100%;
  border-radius: 20px;
  display: block;
  position: relative;
  z-index: 1;
  object-fit: cover;
  object-position: top center;
}
.guest-photo-badge {
  position: absolute;
  bottom: -16px; left: 50%; transform: translateX(-50%);
  z-index: 2;
  background: var(--gold);
  color: var(--forest);
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.12em; text-transform: uppercase;
  padding: 8px 22px; border-radius: 100px;
  white-space: nowrap;
}

/* ── WHAT TO BRING ── */
.bring-sec { background: var(--white); }
.bring-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 16px;
}
.bring-card {
  border: 1px solid var(--border); border-radius: 12px;
  padding: 24px; background: var(--cream);
  display: flex; align-items: flex-start; gap: 12px;
}
.bring-icon { font-size: 22px; flex-shrink: 0; }
.bring-text { font-size: 13.5px; color: var(--text-mid); line-height: 1.55; }

/* ── PARTNERS ── */
.partners-sec { background: var(--cream); }
.partners-row {
  display: flex; align-items: center;
  justify-content: center; gap: 32px; flex-wrap: wrap;
}
.partner-box {
  background: var(--white); border: 1px solid var(--border);
  border-radius: 12px; padding: 20px 32px;
  display: flex; align-items: center; justify-content: center;
  min-width: 160px; min-height: 84px;
}
.partner-box img {
  max-height: 52px; max-width: 140px; object-fit: contain;
}

/* ── CONTACT ── */
.contact-sec { background: var(--white); }
.contact-grid {
  display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 16px;
}
.contact-card {
  border: 1px solid var(--border); border-radius: 12px;
  padding: 24px; background: var(--cream);
  display: flex; align-items: flex-start; gap: 12px;
}
.contact-icon {
  width: 40px; height: 40px; border-radius: 10px;
  background: var(--forest); color: var(--gold-light);
  display: flex; align-items: center; justify-content: center;
  font-size: 18px; flex-shrink: 0;
}
.contact-label { font-size: 11px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 4px; }
.contact-value { font-size: 14px; font-weight: 500; color: var(--forest); }

/* ── CTA ── */
.cta-sec {
  background: var(--forest); text-align: center;
  padding: 100px 48px; position: relative; overflow: hidden;
}
.cta-glow {
  position: absolute; top: -80px; left: 50%;
  transform: translateX(-50%);
  width: 700px; height: 400px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,168,76,0.1) 0%, transparent 65%);
  pointer-events: none;
}
.cta-quote {
  font-family: 'Playfair Display', serif;
  font-style: italic; font-size: 18px;
  color: rgba(255,255,255,0.45); margin-bottom: 36px;
  position: relative; z-index: 1;
}
.cta-title {
  font-family: 'Playfair Display', serif;
  font-size: 52px; font-weight: 700;
  color: var(--white); margin-bottom: 14px;
  position: relative; z-index: 1; line-height: 1.1;
}
.cta-title em { color: var(--gold-light); font-style: italic; }
.cta-sub {
  font-size: 15px; color: rgba(255,255,255,0.55);
  margin-bottom: 44px; font-weight: 300;
  position: relative; z-index: 1;
}
.cta-btn {
  background: var(--gold); color: var(--forest);
  padding: 16px 52px; border-radius: 8px;
  font-size: 15px; font-weight: 500;
  text-decoration: none; letter-spacing: 0.04em;
  display: inline-block;
  position: relative; z-index: 1;
  transition: background 0.2s;
}
.cta-btn:hover { background: var(--gold-light); }
.cta-note {
  font-size: 12px; color: rgba(255,255,255,0.3);
  margin-top: 20px; position: relative; z-index: 1;
}

/* ── FOOTER ── */
footer {
  background: #0F2318; padding: 36px 48px;
  text-align: center;
}
.footer-links {
  display: flex; justify-content: center;
  align-items: center; gap: 32px; flex-wrap: wrap;
  margin-bottom: 16px;
}
.footer-link {
  font-size: 13px; color: rgba(255,255,255,0.45);
  text-decoration: none; display: flex; align-items: center; gap: 6px;
}
.footer-link:hover { color: var(--gold-light); }
.footer-copy { font-size: 12px; color: rgba(255,255,255,0.2); }

/* ── COUNTDOWN ── */
.countdown-sec {
  background: var(--forest);
  padding: 56px 48px;
  position: relative; overflow: hidden;
}
.countdown-glow {
  position: absolute; top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 700px; height: 400px; border-radius: 50%;
  background: radial-gradient(circle, rgba(201,168,76,0.08) 0%, transparent 65%);
  pointer-events: none;
}
.countdown-inner {
  max-width: 1160px; margin: 0 auto;
  position: relative; z-index: 1;
  display: flex; flex-direction: column; align-items: center; gap: 12px;
}
.countdown-eye {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--gold); text-align: center;
}
.countdown-heading {
  font-family: 'Playfair Display', serif;
  font-size: 22px; color: rgba(255,255,255,0.5);
  font-style: italic; font-weight: 400;
  text-align: center; margin-bottom: 8px;
}
.countdown-units {
  display: flex; align-items: flex-start;
  gap: 8px; flex-wrap: wrap; justify-content: center;
}
.cd-unit {
  display: flex; flex-direction: column; align-items: center; gap: 8px;
}
.cd-box {
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(201,168,76,0.2);
  border-radius: 14px;
  width: 110px; height: 110px;
  display: flex; align-items: center; justify-content: center;
  position: relative; overflow: hidden;
}
.cd-box::before {
  content: '';
  position: absolute; left: 0; right: 0;
  top: 50%; height: 1px;
  background: rgba(201,168,76,0.12);
}
.cd-num {
  font-family: 'Playfair Display', serif;
  font-size: 52px; font-weight: 700;
  color: var(--white); line-height: 1;
  letter-spacing: -0.02em;
  transition: transform 0.3s ease, opacity 0.3s ease;
}
.cd-num.flip { transform: translateY(-8px); opacity: 0; }
.cd-label {
  font-size: 10px; font-weight: 500;
  letter-spacing: 0.18em; text-transform: uppercase;
  color: rgba(255,255,255,0.35);
}
.cd-sep {
  font-family: 'Playfair Display', serif;
  font-size: 44px; color: rgba(201,168,76,0.4);
  line-height: 1; margin-top: 8px; font-weight: 700;
  align-self: flex-start; padding-top: 16px;
}
.countdown-done {
  font-family: 'Playfair Display', serif;
  font-size: 28px; font-style: italic;
  color: var(--gold-light); text-align: center; display: none;
}

/* ── RESPONSIVE ── */
@media (max-width: 900px) {
  .cd-box { width: 76px; height: 76px; border-radius: 10px; }
  .cd-num { font-size: 36px; }
  .cd-sep { font-size: 28px; padding-top: 12px; }
  .countdown-sec { padding: 48px 24px; }
}
@media (max-width: 900px) {
  .hero-inner { grid-template-columns: 1fr; padding: 48px 24px 60px; gap: 44px; }
  .hero-title { font-size: 40px; }
  .info-bar-inner { grid-template-columns: 1fr; }
  .info-cell { border-right: none; border-bottom: 1px solid rgba(0,0,0,0.1); }
  .benefits-grid { grid-template-columns: repeat(2, 1fr); }
  .guidelines-grid { grid-template-columns: 1fr; }
  .guest-inner { grid-template-columns: 1fr; padding: 64px 24px; gap: 44px; }
  .guest-name { font-size: 44px; }
  .sec { padding: 64px 24px; }
  .cta-title { font-size: 36px; }
  footer { padding: 28px 24px; }
}
</style>
</head>
<body>

<!-- ── HERO ── -->
<section class="hero">
    <div class="hero-glow-1"></div>
    <div class="hero-glow-2"></div>
    <div class="hero-inner">
        <div>
            <div class="partner-logos">
                <img src="{{ asset('images/embassy-india.png') }}" alt="Embassy of India">
                <img src="{{ asset('images/iop-unwahas.jpeg') }}" alt="IOP Unwahas">
                <img src="{{ asset('images/unwahas-logo.png') }}" alt="UNWAHAS">
            </div>
            <p class="hero-eyebrow">Universitas Wahid Hasyim Semarang</p>
            <h1 class="hero-title">
                International<br>
                <em>Yoga Festival</em><br>
                2026
            </h1>
            <p class="hero-theme">Yoga for Healthy Ageing</p>
            <p class="hero-tagline">
                Empowering healthy, active, and meaningful ageing through yoga, wellness, and international collaboration.
            </p>
            <div class="hero-collab">
                Organized by <strong>Universitas Wahid Hasyim Semarang</strong><br>
                In collaboration with <strong>Embassy of India, Jakarta</strong> &amp; <strong>International Office and Partnership</strong>
            </div>
            <div class="hero-btns">
                <a href="/register-event" class="btn-gold">Register Now</a>
                <a href="#schedule" class="btn-ghost">View Schedule</a>
            </div>
        </div>
        <div class="hero-poster">
            <img src="{{ asset('images/poster.jpeg') }}" alt="International Yoga Festival 2026 Poster">
        </div>
    </div>
</section>

<!-- ── INFO BAR ── -->
<div id="about" class="info-bar">
    <div class="info-bar-inner">
        <div class="info-cell">
            <span class="info-cell-icon">📅</span>
            <div>
                <div class="info-cell-label">Date</div>
                <div class="info-cell-value">Saturday, 20 June 2026</div>
                <div class="info-cell-sub">06.30 AM – 09.00 AM</div>
            </div>
        </div>
        <div class="info-cell">
            <span class="info-cell-icon">📍</span>
            <div>
                <div class="info-cell-label">Venue</div>
                <div class="info-cell-value">UNWAHAS Stadium</div>
                <div class="info-cell-sub">Football Field, Campus 2, Gunungpati</div>
            </div>
        </div>
        <div class="info-cell">
            <span class="info-cell-icon">🎫</span>
            <div>
                <div class="info-cell-label">Entry Fee</div>
                <div class="info-cell-value">Rp 50.000</div>
                <div class="info-cell-sub">Open for all ages</div>
            </div>
        </div>
    </div>
</div>

<!-- ── COUNTDOWN ── -->
<section class="countdown-sec">
    <div class="countdown-glow"></div>
    <div class="countdown-inner">
        <p class="countdown-eye">Event starts in</p>
        <p class="countdown-heading">Saturday, 20 June 2026 · 06.30 WIB</p>
        <div class="countdown-units" id="countdown-units">
            <div class="cd-unit">
                <div class="cd-box"><span class="cd-num" id="cd-days">00</span></div>
                <span class="cd-label">Days</span>
            </div>
            <div class="cd-sep">:</div>
            <div class="cd-unit">
                <div class="cd-box"><span class="cd-num" id="cd-hours">00</span></div>
                <span class="cd-label">Hours</span>
            </div>
            <div class="cd-sep">:</div>
            <div class="cd-unit">
                <div class="cd-box"><span class="cd-num" id="cd-mins">00</span></div>
                <span class="cd-label">Minutes</span>
            </div>
            <div class="cd-sep">:</div>
            <div class="cd-unit">
                <div class="cd-box"><span class="cd-num" id="cd-secs">00</span></div>
                <span class="cd-label">Seconds</span>
            </div>
        </div>
        <p class="countdown-done" id="countdown-done">The event has begun — see you on the mat! 🧘</p>
    </div>
</section>

<script>
(function() {
    var target = new Date('2026-06-20T06:30:00+07:00').getTime();
    var els = {
        d: document.getElementById('cd-days'),
        h: document.getElementById('cd-hours'),
        m: document.getElementById('cd-mins'),
        s: document.getElementById('cd-secs')
    };
    var prev = { d: null, h: null, m: null, s: null };

    function pad(n) { return String(Math.max(0, n)).padStart(2, '0'); }

    function animateFlip(el, val) {
        if (prev[el.id.replace('cd-','')] === val) return;
        prev[el.id.replace('cd-','')] = val;
        el.classList.add('flip');
        setTimeout(function() {
            el.textContent = val;
            el.classList.remove('flip');
        }, 300);
    }

    function tick() {
        var now = Date.now();
        var diff = target - now;
        if (diff <= 0) {
            document.getElementById('countdown-units').style.display = 'none';
            document.getElementById('countdown-done').style.display = 'block';
            return;
        }
        var d = Math.floor(diff / 86400000);
        var h = Math.floor((diff % 86400000) / 3600000);
        var m = Math.floor((diff % 3600000) / 60000);
        var s = Math.floor((diff % 60000) / 1000);
        animateFlip(els.d, pad(d));
        animateFlip(els.h, pad(h));
        animateFlip(els.m, pad(m));
        animateFlip(els.s, pad(s));
    }

    tick();
    setInterval(tick, 1000);
})();
</script>

<!-- ── SCHEDULE ── -->
<section id="schedule" class="sec schedule-sec">
    <div class="sec-inner">
        <div class="tc">
            <p class="sec-eye">Program</p>
            <h2 class="sec-title">Event <em>Schedule</em></h2>
        </div>
        <div class="schedule-grid">
            <div class="sched-item">
                <div class="sched-time">05.30 – 06.00</div>
                <div class="sched-title">Gate Opens &amp; Registration</div>
                <p class="sched-desc">On-site registration. Receive your wristband, t-shirt, and yoga mat.</p>
            </div>
            <div class="sched-item">
                <div class="sched-time">06.00 – 06.15</div>
                <div class="sched-title">Opening Ceremony</div>
                <p class="sched-desc">Official opening by university and embassy representatives.</p>
            </div>
            <div class="sched-item">
                <div class="sched-time">06.15 – 06.30</div>
                <div class="sched-title">Welcome Remarks</div>
                <p class="sched-desc">Welcoming address from organizers and honored guests.</p>
            </div>
            <div class="sched-item">
                <div class="sched-time">06.30 – 08.00</div>
                <div class="sched-title">Mass Yoga Session</div>
                <p class="sched-desc">Guided by Anjasmara and assistant instructors for all 2,000 participants.</p>
            </div>
            <div class="sched-item">
                <div class="sched-time">08.00 – Finish</div>
                <div class="sched-title">Closing &amp; Networking</div>
                <p class="sched-desc">Closing session, photo opportunities, and free networking time.</p>
            </div>
        </div>
        <p style="text-align:center; margin-top: 20px; font-size: 12px; color: var(--text-muted);">
            * Schedule may be adjusted by the organizing committee. Please arrive by 05.45 WIB.
        </p>
    </div>
</section>

<!-- ── BENEFITS ── -->
<section class="sec benefits-sec">
    <div class="sec-inner">
        <div class="tc">
            <p class="sec-eye">Benefits of participation</p>
            <h2 class="sec-title">Why <em>Join?</em></h2>
        </div>
        <div class="benefits-grid">
            <div class="benefit-card">
                <span class="benefit-icon">🧘</span>
                <div class="benefit-title">Flexibility &amp; Mobility</div>
                <p class="benefit-text">Improve your body's flexibility and overall physical mobility.</p>
            </div>
            <div class="benefit-card">
                <span class="benefit-icon">❤️</span>
                <div class="benefit-title">Healthy Ageing</div>
                <p class="benefit-text">Support a sustainable healthy ageing process through regular yoga.</p>
            </div>
            <div class="benefit-card">
                <span class="benefit-icon">🧠</span>
                <div class="benefit-title">Mental Wellbeing</div>
                <p class="benefit-text">Enhance mental clarity and reduce stress through mindful practice.</p>
            </div>
            <div class="benefit-card">
                <span class="benefit-icon">🌏</span>
                <div class="benefit-title">Global Harmony</div>
                <p class="benefit-text">Build community and global harmony with 2,000 participants.</p>
            </div>
            <div class="benefit-card">
                <span class="benefit-icon">🎓</span>
                <div class="benefit-title">Certificate</div>
                <p class="benefit-text">Receive an official participation certificate from the organizers.</p>
            </div>
        </div>
    </div>
</section>

<!-- ── FACILITIES ── -->
<section class="sec facilities-sec">
    <div class="sec-inner">
        <div class="tc">
            <p class="sec-eye">What you get</p>
            <h2 class="sec-title">Event <em>Facilities</em></h2>
        </div>
        <div class="facilities-row">
            <div class="facility-card">
                <span class="facility-icon">👕</span>
                <div>
                    <div class="facility-name">Official T-Shirt</div>
                    <p class="facility-desc">Kaos peserta resmi Yoga Festival 2026.</p>
                </div>
            </div>
            <div class="facility-card">
                <span class="facility-icon">🧘</span>
                <div>
                    <div class="facility-name">Free Yoga Mat</div>
                    <p class="facility-desc">Yoga mat gratis, tidak perlu membawa sendiri.</p>
                </div>
            </div>
            <div class="facility-card">
                <span class="facility-icon">🍱</span>
                <div>
                    <div class="facility-name">Konsumsi</div>
                    <p class="facility-desc">Snack dan minuman disediakan panitia.</p>
                </div>
            </div>
            <div class="facility-card">
                <span class="facility-icon">🏥</span>
                <div>
                    <div class="facility-name">Medical Team</div>
                    <p class="facility-desc">Health tent, tim medis, dan ambulans siaga.</p>
                </div>
            </div>
            <div class="facility-card">
                <span class="facility-icon">🅿️</span>
                <div>
                    <div class="facility-name">Free Parking</div>
                    <p class="facility-desc">Area parkir tersedia di halaman Campus 2.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── SPECIAL GUEST ── -->
<section class="guest-sec">
    <div class="guest-glow"></div>
    <div class="guest-inner">
        <div>
            <p class="guest-label">Special Guest &amp; Main Instructor</p>
            <h2 class="guest-name">Anjasmara</h2>
            <p class="guest-role">Renowned Actor &amp;<br>Master Yoga Practitioner</p>
            <div class="guest-badges">
                <span class="badge">Actor</span>
                <span class="badge">Yoga Master</span>
                <span class="badge">Main Instructor</span>
            </div>
            <p class="guest-desc">
                Anjasmara will personally lead the mass yoga session for all 2,000 participants. A celebrated Indonesian actor and dedicated yoga master, he brings decades of holistic wellness practice to inspire everyone toward a healthier, more mindful life.
            </p>
        </div>
        <div class="guest-visual">
            <div class="guest-photo-wrap">
                <img src="{{ asset('images/anjasmara.jpeg') }}" alt="Anjasmara — Renowned Actor & Master Yoga Practitioner">
                <span class="guest-photo-badge">Main Instructor</span>
            </div>
        </div>
    </div>
</section>

<!-- ── WHAT TO BRING ── -->
<section class="sec bring-sec">
    <div class="sec-inner">
        <div class="tc">
            <p class="sec-eye">Preparation</p>
            <h2 class="sec-title">What to <em>Bring</em></h2>
        </div>
        <div class="bring-grid">
            <div class="bring-card">
                <span class="bring-icon">🧴</span>
                <span class="bring-text">Personal tumbler filled with sufficient drinking water.</span>
            </div>
            <div class="bring-card">
                <span class="bring-icon">💊</span>
                <span class="bring-text">Personal medication if necessary.</span>
            </div>
            <div class="bring-card">
                <span class="bring-icon">🏃</span>
                <span class="bring-text">Comfortable, modest sportswear that allows free movement.</span>
            </div>
            <div class="bring-card">
                <span class="bring-icon">🧢</span>
                <span class="bring-text">Hat or head covering — event is held outdoors.</span>
            </div>
            <div class="bring-card">
                <span class="bring-icon">🧻</span>
                <span class="bring-text">A small personal towel or cloth.</span>
            </div>
            <div class="bring-card">
                <span class="bring-icon">☂️</span>
                <span class="bring-text">Foldable umbrella or lightweight raincoat as weather precaution.</span>
            </div>
        </div>
        <p style="text-align:center; margin-top: 24px; font-size: 13px; color: var(--text-muted);">
            ✅ Yoga mat <strong>tidak perlu</strong> dibawa — sudah disediakan panitia.
        </p>
    </div>
</section>

<!-- ── GUIDELINES ── -->
<section class="sec guidelines-sec">
    <div class="sec-inner">
        <div class="tc">
            <p class="sec-eye">Participant guidelines</p>
            <h2 class="sec-title">Rules &amp; <em>Conduct</em></h2>
        </div>
        <div class="guidelines-grid">
            <div class="guideline-card">
                <div class="guideline-head">
                    <div class="guideline-num">✓</div>
                    <div class="guideline-title">Code of Conduct</div>
                </div>
                <ul class="guideline-list">
                    <li><span class="gi-check">✓</span> Maintain order and mutual comfort throughout the event.</li>
                    <li><span class="gi-check">✓</span> Respect instructors, committee, and fellow participants.</li>
                    <li><span class="gi-check">✓</span> Keep the event environment clean at all times.</li>
                    <li><span class="gi-check">✓</span> Follow all instructions from the organizing committee.</li>
                    <li><span class="gi-check">✓</span> Use event facilities responsibly and appropriately.</li>
                    <li><span class="gi-check">✓</span> Bring own tumbler and reduce single-use plastics (Green Event).</li>
                </ul>
            </div>
            <div class="guideline-card">
                <div class="guideline-head">
                    <div class="guideline-num" style="background:#C0503A;">✗</div>
                    <div class="guideline-title">Prohibited</div>
                </div>
                <ul class="guideline-list">
                    <li><span class="gi-x">✗</span> Alcoholic beverages or illegal drugs.</li>
                    <li><span class="gi-x">✗</span> Smoking anywhere within the event area.</li>
                    <li><span class="gi-x">✗</span> Sharp or dangerous objects.</li>
                    <li><span class="gi-x">✗</span> Disrupting the event proceedings.</li>
                    <li><span class="gi-x">✗</span> Littering — use bins provided.</li>
                    <li><span class="gi-x">✗</span> Entering VIP or restricted zones without authorization.</li>
                </ul>
            </div>
            <div class="guideline-card">
                <div class="guideline-head">
                    <div class="guideline-num">🚗</div>
                    <div class="guideline-title">Arrival &amp; Parking</div>
                </div>
                <ul class="guideline-list">
                    <li><span class="gi-check">✓</span> Enter through the <strong>West Entrance</strong> of Football Field, Campus 2.</li>
                    <li><span class="gi-check">✓</span> Parking available at front yard of Campus 2 main gate.</li>
                    <li><span class="gi-check">✓</span> Follow directions from parking attendants and volunteers.</li>
                    <li><span class="gi-check">✓</span> Arrive at least 30 minutes before the event (by 05.45 WIB).</li>
                </ul>
            </div>
            <div class="guideline-card">
                <div class="guideline-head">
                    <div class="guideline-num">🏥</div>
                    <div class="guideline-title">Health &amp; Safety</div>
                </div>
                <ul class="guideline-list">
                    <li><span class="gi-check">✓</span> Adjust yoga movements to your own physical condition.</li>
                    <li><span class="gi-check">✓</span> Never force movements that cause pain or discomfort.</li>
                    <li><span class="gi-check">✓</span> Contact medical staff if you feel dizzy or unwell.</li>
                    <li><span class="gi-check">✓</span> Apply sunscreen — event is held outdoors.</li>
                    <li><span class="gi-check">✓</span> In an emergency, follow instructions to the assembly point.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ── CONTACT ── -->
<section class="sec contact-sec">
    <div class="sec-inner">
        <div class="tc">
            <p class="sec-eye">Get in touch</p>
            <h2 class="sec-title">Contact &amp; <em>Info</em></h2>
        </div>
        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-icon">📞</div>
                <div>
                    <div class="contact-label">Contact Person</div>
                    <div class="contact-value">Bu Eva — 081329536201</div>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-icon">🌐</div>
                <div>
                    <div class="contact-label">Website</div>
                    <div class="contact-value">www.unwahas.ac.id</div>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-icon">📘</div>
                <div>
                    <div class="contact-label">Facebook</div>
                    <div class="contact-value">Unwahasaja</div>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-icon">▶️</div>
                <div>
                    <div class="contact-label">YouTube</div>
                    <div class="contact-value">Unwahas TV</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── PARTNERS ── -->
<section class="sec partners-sec" style="background: var(--cream); padding-top: 0;">
    <div class="sec-inner">
        <div class="tc">
            <p class="sec-eye">Supported by</p>
            <h2 class="sec-title">Our <em>Partners</em></h2>
        </div>
        <div class="partners-row">
            <div class="partner-box">
                <img src="{{ asset('images/embassy-india.png') }}" alt="Embassy of India">
            </div>
            <div class="partner-box">
                <img src="{{ asset('images/iop-unwahas.jpeg') }}" alt="IOP Unwahas">
            </div>
            <div class="partner-box">
                <img src="{{ asset('images/unwahas-logo.png') }}" alt="UNWAHAS">
            </div>
        </div>
    </div>
</section>

<!-- ── CTA ── -->
<section class="cta-sec">
    <div class="cta-glow"></div>
    <p class="cta-quote">"Yoga Today, Healthy Tomorrow, Stronger Together for a Better Ageing."</p>
    <h2 class="cta-title">Join 2,000 <em>Participants</em></h2>
    <p class="cta-sub">Saturday, 20 June 2026 · UNWAHAS Stadium, Gunungpati, Semarang</p>
    <a href="/register-event" class="cta-btn">Register Now →</a>
    <p class="cta-note">Entry fee Rp 50.000 · T-shirt, yoga mat &amp; snack included</p>
</section>

<!-- ── FOOTER ── -->
<footer>
    <div class="footer-links">
        <a href="https://www.unwahas.ac.id" class="footer-link">🌐 www.unwahas.ac.id</a>
        <a href="#" class="footer-link">📘 Unwahasaja</a>
        <a href="#" class="footer-link">▶️ Unwahas TV</a>
        <a href="https://wa.me/6281329536201" class="footer-link">📞 Bu Eva — 081329536201</a>
    </div>
    <p class="footer-copy">© 2026 International Office &amp; Partnership, Universitas Wahid Hasyim Semarang</p>
</footer>

</body>
</html>