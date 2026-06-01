<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>International Yoga Festival 2026 · UNWAHAS</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --saffron: #E8933A;
  --saffron-deep: #C4711E;
  --saffron-pale: #FDF0E2;
  --saffron-glow: rgba(232,147,58,0.18);
  --jade: #1B4332;
  --jade-mid: #2D6A4F;
  --jade-bright: #52B788;
  --jade-pale: #D8F3DC;
  --ivory: #FAF8F3;
  --parchment: #F3EFE6;
  --ink: #1A1814;
  --ink-mid: #3D3A34;
  --ink-muted: #7A756C;
  --line: rgba(26,24,20,0.1);
  --white: #FFFFFF;
}

html { scroll-behavior: smooth; }

body {
  font-family: 'Outfit', sans-serif;
  background: var(--ivory);
  color: var(--ink);
  overflow-x: hidden;
}

/* ── NOISE TEXTURE ── */
body::before {
  content: '';
  position: fixed; inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.03'/%3E%3C/svg%3E");
  pointer-events: none; z-index: 0; opacity: 0.5;
}

/* ── NAV ── */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 100;
  padding: 0 48px;
  display: flex; align-items: center; justify-content: space-between;
  height: 72px;
  background: rgba(255,255,255,0.97);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(26,67,50,0.08);
  box-shadow: 0 1px 24px rgba(26,67,50,0.06);
}
.nav-brand {
  font-family: 'Cormorant Garamond', serif;
  font-size: 20px; font-weight: 600;
  color: var(--jade); letter-spacing: 0.02em;
}
.nav-brand span { color: var(--saffron); font-style: italic; }
.nav-links { display: flex; gap: 32px; }
.nav-links a {
  font-size: 13px; font-weight: 400;
  color: var(--ink-muted);
  text-decoration: none; letter-spacing: 0.04em;
  transition: color 0.2s;
}
.nav-links a:hover { color: var(--jade); }
.nav-cta {
  background: var(--saffron); color: var(--jade) !important;
  padding: 8px 22px; border-radius: 4px;
  font-weight: 500 !important; font-size: 13px;
  letter-spacing: 0.04em; text-decoration: none;
  transition: background 0.2s !important; color: var(--jade) !important;
}
.nav-cta:hover { background: #F0A55A !important; color: var(--jade) !important; }

/* ── HAMBURGER ── */
.nav-hamburger {
  display: none;
  flex-direction: column; justify-content: center; gap: 5px;
  width: 40px; height: 40px; cursor: pointer;
  background: none; border: none; padding: 4px;
  border-radius: 6px; transition: background 0.2s;
}
.nav-hamburger:hover { background: rgba(26,67,50,0.06); }
.nav-hamburger span {
  display: block; height: 2px; border-radius: 2px;
  background: var(--jade); transition: all 0.3s ease;
  transform-origin: center;
}
.nav-hamburger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.nav-hamburger.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
.nav-hamburger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ── MOBILE DRAWER ── */
.nav-drawer {
  position: fixed; top: 72px; left: 0; right: 0; z-index: 99;
  background: rgba(255,255,255,0.98);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid rgba(26,67,50,0.08);
  padding: 20px 24px 28px;
  flex-direction: column; gap: 4px;
  box-shadow: 0 8px 32px rgba(26,67,50,0.1);
  transform: translateY(-8px); opacity: 0;
  transition: transform 0.25s ease, opacity 0.25s ease;
  pointer-events: none; display: flex;
}
.nav-drawer.open { transform: translateY(0); opacity: 1; pointer-events: auto; }
.nav-drawer a {
  font-size: 15px; font-weight: 400;
  color: var(--ink-mid); text-decoration: none;
  padding: 12px 8px;
  border-bottom: 1px solid rgba(26,24,20,0.06);
  letter-spacing: 0.02em; transition: color 0.2s;
}
.nav-drawer a:hover { color: var(--jade); }
.nav-drawer .drawer-cta {
  margin-top: 12px;
  background: var(--saffron); color: var(--jade);
  text-align: center; padding: 14px;
  border-radius: 6px; font-weight: 600;
  font-size: 14px; letter-spacing: 0.06em;
  text-transform: uppercase; border-bottom: none;
}

/* ── HERO ── */
.hero {
  background: var(--jade);
  min-height: 100vh;
  padding-top: 72px;
  position: relative;
  overflow: hidden;
  display: flex; align-items: center;
}

/* Mandala background */
.hero-mandala {
  position: absolute; right: -80px; top: 50%;
  transform: translateY(-50%);
  width: 700px; height: 700px;
  opacity: 0.05;
}

/* Diagonal stripe accent */
.hero::after {
  content: '';
  position: absolute;
  bottom: 0; left: 0; right: 0;
  height: 80px;
  background: var(--ivory);
  clip-path: polygon(0 100%, 100% 100%, 100% 0);
}

.hero-inner {
  max-width: 1200px; margin: 0 auto;
  padding: 80px 48px 120px;
  display: grid; grid-template-columns: 1fr 400px;
  gap: 80px; align-items: center;
  position: relative; z-index: 1; width: 100%;
}

.hero-logos {
  display: flex; align-items: center; gap: 10px;
  margin-bottom: 32px; flex-wrap: wrap;
}
.logo-pill {
  background: rgba(255,255,255,0.08);
  border: 1px solid rgba(255,255,255,0.12);
  border-radius: 40px;
  padding: 6px 14px 6px 8px;
  display: flex; align-items: center; gap: 8px;
  font-size: 11px; color: rgba(255,255,255,0.55);
  letter-spacing: 0.06em; text-transform: uppercase; font-weight: 500;
}
.logo-pill img {
  height: 28px; width: 28px; object-fit: contain;
  background: rgba(255,255,255,0.9);
  border-radius: 50%; padding: 3px;
}

.hero-eyebrow {
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 20px;
}
.hero-eyebrow-line {
  width: 40px; height: 1px; background: var(--saffron);
}
.hero-eyebrow-text {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--saffron);
}

h1.hero-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 78px; line-height: 0.95; font-weight: 700;
  color: var(--white); margin-bottom: 8px;
  letter-spacing: -0.01em;
}
h1.hero-title em {
  color: var(--saffron);
  font-style: italic; display: block;
  font-size: 86px; line-height: 1;
}

.hero-sub-theme {
  font-family: 'Cormorant Garamond', serif;
  font-size: 22px; font-style: italic; font-weight: 300;
  color: rgba(255,255,255,0.5);
  margin-bottom: 24px;
  border-left: 2px solid var(--saffron);
  padding-left: 16px;
}

.hero-tagline {
  font-size: 14px; font-weight: 300; line-height: 1.8;
  color: rgba(255,255,255,0.5);
  margin-bottom: 36px; max-width: 400px;
}

.hero-collab {
  background: rgba(232,147,58,0.08);
  border: 1px solid rgba(232,147,58,0.2);
  border-radius: 8px;
  padding: 16px 20px; margin-bottom: 44px;
  font-size: 13px; color: rgba(255,255,255,0.55); line-height: 1.75;
}
.hero-collab strong { color: rgba(255,255,255,0.85); font-weight: 500; }

.hero-btns { display: flex; gap: 12px; flex-wrap: wrap; }
.btn-saffron {
  background: var(--saffron); color: var(--jade);
  padding: 15px 40px; border-radius: 4px;
  font-weight: 600; font-size: 13px;
  text-decoration: none; letter-spacing: 0.06em; text-transform: uppercase;
  transition: all 0.25s; display: inline-flex; align-items: center; gap: 8px;
}
.btn-saffron:hover { background: #F0A55A; transform: translateY(-1px); }
.btn-ghost-white {
  border: 1px solid rgba(255,255,255,0.2);
  color: rgba(255,255,255,0.75); padding: 15px 30px;
  border-radius: 4px; font-size: 13px;
  text-decoration: none; transition: all 0.25s; display: inline-block;
  letter-spacing: 0.04em;
}
.btn-ghost-white:hover { background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.4); }

/* Poster card */
.hero-poster-wrap {
  position: relative;
}
.hero-poster-frame {
  position: absolute; inset: -20px;
  border: 1px solid rgba(232,147,58,0.2);
  border-radius: 24px;
  transform: rotate(3deg);
}
.hero-poster-frame2 {
  position: absolute; inset: -10px;
  border: 1px solid rgba(232,147,58,0.1);
  border-radius: 20px;
  transform: rotate(1.2deg);
}
.hero-poster-img {
  width: 100%; border-radius: 16px;
  display: block; position: relative; z-index: 1;
  box-shadow: 0 40px 80px rgba(0,0,0,0.4);
}

/* ── INFO STRIP ── */
.info-strip {
  background: var(--saffron);
  position: relative; z-index: 1;
}
.info-strip-inner {
  max-width: 1200px; margin: 0 auto;
  display: grid; grid-template-columns: repeat(3, 1fr);
}
.info-cell {
  padding: 28px 40px;
  display: flex; align-items: center; gap: 16px;
  border-right: 1px solid rgba(26,67,50,0.12);
}
.info-cell:last-child { border-right: none; }
.ic-icon {
  width: 44px; height: 44px;
  background: rgba(26,67,50,0.12);
  border-radius: 10px;
  display: flex; align-items: center; justify-content: center;
  font-size: 22px; flex-shrink: 0;
}
.ic-label {
  font-size: 10px; font-weight: 600;
  letter-spacing: 0.18em; text-transform: uppercase;
  color: rgba(26,67,50,0.5); margin-bottom: 3px;
}
.ic-value { font-size: 16px; font-weight: 600; color: var(--jade); }
.ic-sub { font-size: 12px; color: rgba(26,67,50,0.55); margin-top: 2px; }

/* ── COUNTDOWN ── */
.countdown {
  background: var(--jade);
  padding: 72px 48px;
  position: relative; overflow: hidden;
}
.countdown::before {
  content: '';
  position: absolute; top: 0; left: 0; right: 0; bottom: 0;
  background: radial-gradient(ellipse 60% 80% at 50% 50%, rgba(232,147,58,0.07) 0%, transparent 70%);
  pointer-events: none;
}
.countdown-inner {
  max-width: 800px; margin: 0 auto; text-align: center;
  position: relative; z-index: 1;
}
.cd-eye {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--saffron); margin-bottom: 8px;
  display: flex; align-items: center; justify-content: center; gap: 12px;
}
.cd-eye::before, .cd-eye::after {
  content: ''; display: block;
  width: 32px; height: 1px; background: rgba(232,147,58,0.4);
}
.cd-heading {
  font-family: 'Cormorant Garamond', serif;
  font-size: 18px; font-style: italic; font-weight: 300;
  color: rgba(255,255,255,0.35);
  margin-bottom: 40px;
}

.cd-units {
  display: flex; align-items: flex-start;
  justify-content: center; gap: 6px;
  flex-wrap: wrap;
}
.cd-unit { display: flex; flex-direction: column; align-items: center; gap: 10px; }
.cd-box {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(232,147,58,0.18);
  border-radius: 12px;
  width: 120px; height: 120px;
  display: flex; align-items: center; justify-content: center;
  position: relative; overflow: hidden;
}
.cd-box::after {
  content: '';
  position: absolute; left: 8px; right: 8px; top: 50%;
  height: 1px; background: rgba(232,147,58,0.1);
}
.cd-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 58px; font-weight: 700;
  color: var(--white); line-height: 1;
  letter-spacing: -0.02em;
  transition: transform 0.25s ease, opacity 0.25s ease;
}
.cd-num.flip { transform: translateY(-10px); opacity: 0; }
.cd-lbl {
  font-size: 10px; font-weight: 500;
  letter-spacing: 0.2em; text-transform: uppercase;
  color: rgba(255,255,255,0.3);
}
.cd-sep {
  font-family: 'Cormorant Garamond', serif;
  font-size: 48px; color: rgba(232,147,58,0.3);
  line-height: 1; padding-top: 20px; font-weight: 700;
}
.cd-done {
  font-family: 'Cormorant Garamond', serif;
  font-size: 28px; font-style: italic;
  color: var(--saffron); display: none;
  margin-top: 16px;
}

/* ── SECTION BASE ── */
.section { padding: 100px 48px; position: relative; z-index: 1; }
.section-inner { max-width: 1200px; margin: 0 auto; }
.section-eyebrow {
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 12px;
}
.section-eyebrow-line { width: 32px; height: 1px; background: var(--jade-bright); }
.section-eyebrow-text {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--jade-bright);
}
.section-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 48px; font-weight: 700;
  line-height: 1.1; color: var(--jade);
  margin-bottom: 60px;
}
.section-title em { font-style: italic; color: var(--jade-mid); }
.tc { text-align: center; }
.tc .section-eyebrow { justify-content: center; }

/* ── SCHEDULE ── */
.schedule-bg { background: var(--white); }
.schedule-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 0;
  border: 1px solid var(--line);
  border-radius: 16px; overflow: hidden;
}
.sched-item {
  padding: 32px 24px;
  border-right: 1px solid var(--line);
  position: relative;
  transition: background 0.2s;
}
.sched-item:hover { background: var(--saffron-pale); }
.sched-item:last-child { border-right: none; }
.sched-item::before {
  content: '';
  position: absolute; top: 0; left: 24px; right: 24px;
  height: 2px; background: var(--saffron);
  transform: scaleX(0); transition: transform 0.3s;
  transform-origin: left;
}
.sched-item:hover::before { transform: scaleX(1); }
.sched-num {
  font-family: 'Cormorant Garamond', serif;
  font-size: 56px; font-weight: 700;
  color: rgba(26,67,50,0.06); line-height: 1;
  margin-bottom: 12px;
}
.sched-time {
  font-size: 11px; font-weight: 600;
  color: var(--saffron); letter-spacing: 0.1em;
  text-transform: uppercase; margin-bottom: 10px;
}
.sched-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 18px; font-weight: 600;
  color: var(--jade); margin-bottom: 8px;
  line-height: 1.2;
}
.sched-desc { font-size: 13px; color: var(--ink-muted); line-height: 1.65; }
.sched-note {
  text-align: center; margin-top: 20px;
  font-size: 12px; color: var(--ink-muted); font-style: italic;
}

/* ── BENEFITS ── */
.benefits-bg { background: var(--parchment); }
.benefits-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
}
.benefit-card {
  background: var(--white);
  border: 1px solid var(--line);
  border-radius: 14px;
  padding: 36px 24px;
  transition: all 0.25s;
  position: relative; overflow: hidden;
}
.benefit-card::before {
  content: '';
  position: absolute; bottom: 0; left: 0; right: 0; height: 3px;
  background: var(--saffron);
  transform: scaleX(0); transition: transform 0.3s;
}
.benefit-card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(26,67,50,0.1); }
.benefit-card:hover::before { transform: scaleX(1); }
.benefit-icon-wrap {
  width: 52px; height: 52px;
  background: var(--jade-pale);
  border-radius: 12px;
  display: flex; align-items: center; justify-content: center;
  font-size: 28px; margin-bottom: 20px;
}
.benefit-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 18px; font-weight: 700;
  color: var(--jade); margin-bottom: 10px;
}
.benefit-text { font-size: 13px; color: var(--ink-muted); line-height: 1.65; }

/* ── FACILITIES ── */
.facilities-bg { background: var(--white); }
.facilities-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 14px;
}
.facility-card {
  border: 1px solid var(--line);
  border-radius: 12px; padding: 24px 20px;
  background: var(--ivory);
  display: flex; align-items: flex-start; gap: 14px;
  transition: border-color 0.2s, background 0.2s;
}
.facility-card:hover {
  border-color: rgba(232,147,58,0.3);
  background: var(--saffron-pale);
}
.fac-icon {
  width: 44px; height: 44px; border-radius: 10px;
  background: var(--jade); color: var(--white);
  display: flex; align-items: center; justify-content: center;
  font-size: 22px; flex-shrink: 0;
}
.fac-name { font-size: 15px; font-weight: 500; color: var(--jade); margin-bottom: 4px; }
.fac-desc { font-size: 12px; color: var(--ink-muted); line-height: 1.55; }

/* ── GUEST ── */
.guest-sec {
  background: var(--jade);
  position: relative; overflow: hidden;
}
.guest-pattern {
  position: absolute; top: 0; left: 0; right: 0; bottom: 0;
  background-image: radial-gradient(circle at 70% 50%, rgba(232,147,58,0.08) 0%, transparent 60%),
                    radial-gradient(circle at 20% 20%, rgba(82,183,136,0.06) 0%, transparent 50%);
  pointer-events: none;
}
.guest-inner {
  max-width: 1200px; margin: 0 auto;
  padding: 100px 48px;
  display: grid; grid-template-columns: 1fr 380px;
  gap: 80px; align-items: center;
  position: relative; z-index: 1;
}
.guest-eye {
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 16px;
}
.guest-eye-line { width: 32px; height: 1px; background: var(--saffron); }
.guest-eye-text {
  font-size: 11px; font-weight: 500;
  letter-spacing: 0.22em; text-transform: uppercase;
  color: var(--saffron);
}
.guest-name {
  font-family: 'Cormorant Garamond', serif;
  font-size: 80px; font-weight: 700;
  color: var(--white); line-height: 0.95;
  letter-spacing: -0.02em; margin-bottom: 16px;
}
.guest-role {
  font-size: 15px; font-weight: 300;
  color: rgba(255,255,255,0.45);
  margin-bottom: 28px; line-height: 1.6;
}
.guest-badges { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 32px; }
.gbadge {
  border: 1px solid rgba(232,147,58,0.35);
  background: rgba(232,147,58,0.1);
  color: rgba(255,204,127,0.9);
  padding: 6px 18px; border-radius: 40px;
  font-size: 11px; font-weight: 500; letter-spacing: 0.08em;
}
.guest-desc {
  font-size: 14px; line-height: 1.8; font-weight: 300;
  color: rgba(255,255,255,0.5); max-width: 480px;
}
.guest-divider {
  width: 48px; height: 1px;
  background: rgba(232,147,58,0.4);
  margin: 28px 0;
}

/* Guest photo */
.guest-photo-wrap {
  position: relative;
}
.guest-photo-ring1 {
  position: absolute; inset: -20px;
  border: 1px solid rgba(232,147,58,0.18);
  border-radius: 24px; transform: rotate(-2.5deg);
}
.guest-photo-ring2 {
  position: absolute; inset: -10px;
  border: 1px solid rgba(232,147,58,0.1);
  border-radius: 20px; transform: rotate(1deg);
}
.guest-photo-img {
  width: 100%; border-radius: 16px;
  display: block; position: relative; z-index: 1;
  object-fit: cover; object-position: top center;
}
.guest-photo-tag {
  position: absolute; bottom: -14px; left: 50%;
  transform: translateX(-50%); z-index: 2;
  background: var(--saffron); color: var(--jade);
  font-size: 10px; font-weight: 600;
  letter-spacing: 0.14em; text-transform: uppercase;
  padding: 8px 24px; border-radius: 40px;
  white-space: nowrap;
}

/* ── BRING ── */
.bring-bg { background: var(--white); }
.bring-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 14px;
}
.bring-card {
  border: 1px solid var(--line);
  border-radius: 12px; padding: 24px;
  background: var(--ivory);
  display: flex; align-items: flex-start; gap: 14px;
  transition: all 0.2s;
}
.bring-card:hover {
  background: var(--saffron-pale);
  border-color: rgba(232,147,58,0.3);
}
.bring-icon {
  font-size: 28px; flex-shrink: 0;
  width: 44px; height: 44px;
  display: flex; align-items: center; justify-content: center;
}
.bring-text { font-size: 13.5px; color: var(--ink-mid); line-height: 1.6; padding-top: 8px; }
.bring-note {
  text-align: center; margin-top: 24px;
  font-size: 13px; color: var(--jade-mid);
  background: var(--jade-pale);
  border: 1px solid rgba(26,67,50,0.15);
  border-radius: 8px; padding: 14px 20px; display: inline-block;
}
.bring-note-wrap { text-align: center; }

/* ── GUIDELINES ── */
.guidelines-bg { background: var(--parchment); }
.guidelines-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 20px;
}
.gl-card {
  background: var(--white);
  border: 1px solid var(--line);
  border-radius: 16px; padding: 32px;
}
.gl-head {
  display: flex; align-items: center; gap: 12px;
  margin-bottom: 24px; padding-bottom: 20px;
  border-bottom: 1px solid var(--line);
}
.gl-num {
  width: 36px; height: 36px; border-radius: 50%;
  background: var(--jade); color: rgba(255,204,100,0.9);
  font-size: 14px; font-weight: 600;
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0; font-family: 'Cormorant Garamond', serif;
}
.gl-num.red { background: #9B3520; }
.gl-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 20px; font-weight: 700; color: var(--jade);
}
.gl-list { list-style: none; }
.gl-list li {
  font-size: 13px; color: var(--ink-mid);
  padding: 8px 0;
  border-bottom: 1px solid rgba(26,24,20,0.06);
  display: flex; align-items: flex-start; gap: 10px; line-height: 1.6;
}
.gl-list li:last-child { border-bottom: none; }
.gl-check { color: var(--jade-bright); font-size: 15px; flex-shrink: 0; margin-top: 1px; }
.gl-x { color: #C0503A; font-size: 15px; flex-shrink: 0; margin-top: 1px; }

/* ── CONTACT ── */
.contact-bg { background: var(--white); }
.contact-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 14px;
}
.contact-card {
  border: 1px solid var(--line);
  border-radius: 12px; padding: 24px;
  background: var(--ivory);
  display: flex; align-items: center; gap: 14px;
  transition: all 0.2s;
}
.contact-card:hover { background: var(--jade-pale); border-color: rgba(26,67,50,0.2); }
.contact-icon-wrap {
  width: 44px; height: 44px; border-radius: 10px;
  background: var(--jade);
  display: flex; align-items: center; justify-content: center;
  font-size: 20px; flex-shrink: 0;
}
.contact-label {
  font-size: 10px; color: var(--ink-muted);
  text-transform: uppercase; letter-spacing: 0.12em;
  margin-bottom: 4px; font-weight: 500;
}
.contact-value { font-size: 14px; font-weight: 500; color: var(--jade); }

/* ── PARTNERS ── */
.partners-bg { background: var(--parchment); }
.partners-row {
  display: flex; align-items: center;
  justify-content: center; gap: 24px; flex-wrap: wrap;
}
.partner-box {
  background: var(--white);
  border: 1px solid var(--line);
  border-radius: 12px;
  padding: 20px 36px;
  display: flex; align-items: center; justify-content: center;
  min-width: 170px; min-height: 88px;
  transition: box-shadow 0.2s;
}
.partner-box:hover { box-shadow: 0 4px 20px rgba(26,67,50,0.08); }
.partner-box img { max-height: 54px; max-width: 140px; object-fit: contain; }

/* ── CTA ── */
.cta-sec {
  background: var(--jade);
  padding: 120px 48px; text-align: center;
  position: relative; overflow: hidden;
}
.cta-bg {
  position: absolute; inset: 0;
  background: radial-gradient(ellipse 70% 100% at 50% 50%, rgba(232,147,58,0.08) 0%, transparent 60%);
  pointer-events: none;
}
.cta-decor {
  position: absolute; top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 600px; height: 600px;
  border: 1px solid rgba(232,147,58,0.06);
  border-radius: 50%;
  pointer-events: none;
}
.cta-decor2 {
  position: absolute; top: 50%; left: 50%;
  transform: translate(-50%, -50%);
  width: 400px; height: 400px;
  border: 1px solid rgba(232,147,58,0.08);
  border-radius: 50%;
  pointer-events: none;
}
.cta-quote {
  font-family: 'Cormorant Garamond', serif;
  font-style: italic; font-size: 20px; font-weight: 300;
  color: rgba(255,255,255,0.3);
  margin-bottom: 32px;
  position: relative; z-index: 1;
  max-width: 600px; margin-left: auto; margin-right: auto;
  margin-bottom: 32px;
}
.cta-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 64px; font-weight: 700;
  color: var(--white); line-height: 1.05;
  margin-bottom: 12px; position: relative; z-index: 1;
}
.cta-title em { color: var(--saffron); font-style: italic; }
.cta-subtitle {
  font-size: 14px; font-weight: 300;
  color: rgba(255,255,255,0.45);
  margin-bottom: 48px; position: relative; z-index: 1;
}
.cta-btn {
  background: var(--saffron); color: var(--jade);
  padding: 18px 64px; border-radius: 4px;
  font-size: 13px; font-weight: 600;
  text-decoration: none; letter-spacing: 0.08em; text-transform: uppercase;
  display: inline-block; position: relative; z-index: 1;
  transition: all 0.25s;
}
.cta-btn:hover { background: #F0A55A; transform: translateY(-2px); }
.cta-note {
  font-size: 12px; color: rgba(255,255,255,0.25);
  margin-top: 20px; position: relative; z-index: 1;
}

/* ── FOOTER ── */
footer {
  background: #0E2B1E;
  padding: 40px 48px;
  display: flex; align-items: center; justify-content: space-between;
  flex-wrap: wrap; gap: 20px;
}
.footer-links {
  display: flex; gap: 24px; flex-wrap: wrap;
}
.footer-link {
  font-size: 13px; color: rgba(255,255,255,0.35);
  text-decoration: none; display: flex; align-items: center; gap: 6px;
  transition: color 0.2s;
}
.footer-link:hover { color: rgba(232,147,58,0.8); }
.footer-copy { font-size: 12px; color: rgba(255,255,255,0.2); }

/* ── IMPORTANT NOTICE BANNER ── */
.notice-banner {
  background: var(--saffron-pale);
  border-top: 3px solid var(--saffron);
  padding: 40px 48px;
  position: relative; z-index: 1;
}
.notice-banner-inner {
  max-width: 1200px; margin: 0 auto;
}
.notice-title {
  font-family: 'Cormorant Garamond', serif;
  font-size: 22px; font-weight: 700;
  color: var(--jade); margin-bottom: 20px;
  display: flex; align-items: center; gap: 10px;
}
.notice-cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 14px;
}
.notice-card {
  background: var(--white);
  border: 1px solid rgba(232,147,58,0.25);
  border-left: 4px solid var(--saffron);
  border-radius: 0 10px 10px 0;
  padding: 18px 20px;
  display: flex; align-items: flex-start; gap: 14px;
}
.notice-icon {
  font-size: 28px; flex-shrink: 0; line-height: 1;
  margin-top: 2px;
}
.notice-card-title {
  font-size: 14px; font-weight: 600;
  color: var(--jade); margin-bottom: 5px;
}
.notice-card-text {
  font-size: 13px; color: var(--ink-mid); line-height: 1.6;
}
.notice-card-text strong { color: var(--saffron-deep); }

/* ── ADD TO CALENDAR ── */
.cal-wrap {
  margin-top: 28px;
  display: flex; justify-content: center;
  position: relative;
}
.cal-btn {
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(232,147,58,0.35);
  color: rgba(255,255,255,0.85);
  padding: 12px 28px; border-radius: 6px;
  font-size: 13px; font-weight: 500;
  cursor: pointer; letter-spacing: 0.04em;
  display: flex; align-items: center; gap: 8px;
  transition: all 0.2s; font-family: 'Outfit', sans-serif;
}
.cal-btn:hover {
  background: rgba(232,147,58,0.15);
  border-color: rgba(232,147,58,0.6);
  color: var(--white);
}
.cal-dropdown {
  position: absolute; top: calc(100% + 8px); left: 50%;
  transform: translateX(-50%);
  background: var(--white);
  border: 1px solid var(--line);
  border-radius: 10px;
  box-shadow: 0 8px 32px rgba(26,67,50,0.15);
  min-width: 220px; overflow: hidden;
  display: none; z-index: 10;
}
.cal-dropdown.open { display: block; }
.cal-option {
  display: flex; align-items: center; gap: 10px;
  padding: 13px 18px;
  font-size: 13px; font-weight: 500;
  color: var(--ink-mid); text-decoration: none;
  border-bottom: 1px solid rgba(26,24,20,0.06);
  transition: background 0.15s; cursor: pointer;
}
.cal-option:last-child { border-bottom: none; }
.cal-option:hover { background: var(--jade-pale); color: var(--jade); }
.cal-option-icon { font-size: 18px; flex-shrink: 0; }

/* ── SCROLL ANIMATIONS ── */
.reveal {
  opacity: 0; transform: translateY(24px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}
.reveal.visible { opacity: 1; transform: none; }
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
  .schedule-grid { grid-template-columns: repeat(3, 1fr); }
  .benefits-grid { grid-template-columns: repeat(3, 1fr); }
}
@media (max-width: 900px) {
  nav { padding: 0 20px; }
  .nav-links { display: none; }
  .nav-cta { display: none; }
  .nav-hamburger { display: flex; }
  .hero-inner { grid-template-columns: 1fr; padding: 48px 24px 80px; gap: 48px; }
  h1.hero-title { font-size: 52px; }
  h1.hero-title em { font-size: 58px; }
  .info-strip-inner { grid-template-columns: 1fr; }
  .info-cell { border-right: none; border-bottom: 1px solid rgba(26,67,50,0.12); }
  .guest-inner { grid-template-columns: 1fr; padding: 64px 24px; }
  .guest-name { font-size: 56px; }
  .schedule-grid { grid-template-columns: 1fr; }
  .benefits-grid { grid-template-columns: repeat(2, 1fr); }
  .guidelines-grid { grid-template-columns: 1fr; }
  .section { padding: 64px 24px; }
  .cta-title { font-size: 42px; }
  footer { padding: 28px 24px; flex-direction: column; }
  .notice-banner { padding: 32px 24px; }
  .cd-box { width: 80px; height: 80px; border-radius: 10px; }
  .cd-num { font-size: 40px; }
  .cd-sep { font-size: 32px; }
}
</style>
</head>
<body>

<!-- ── NAV ── -->
<nav>
  <div class="nav-brand">Yoga <span>Festival</span> 2026</div>
  <div class="nav-links">
    <a href="#about">About</a>
    <a href="#schedule">Schedule</a>
    <a href="#guest">Guest</a>
    <a href="#contact">Contact</a>
    <a href="/register-event" class="nav-cta">Register Now</a>
  </div>
  <button class="nav-hamburger" id="nav-hamburger" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
</nav>
<div class="nav-drawer" id="nav-drawer">
  <a href="#about" class="drawer-link">About</a>
  <a href="#schedule" class="drawer-link">Schedule</a>
  <a href="#guest" class="drawer-link">Guest</a>
  <a href="#contact" class="drawer-link">Contact</a>
  <a href="/register-event" class="drawer-cta">Register Now →</a>
</div>

<!-- ── HERO ── -->
<section class="hero" id="about">
  <!-- Decorative mandala SVG -->
  <svg class="hero-mandala" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="100" cy="100" r="90" stroke="white" stroke-width="0.5"/>
    <circle cx="100" cy="100" r="70" stroke="white" stroke-width="0.5"/>
    <circle cx="100" cy="100" r="50" stroke="white" stroke-width="0.5"/>
    <circle cx="100" cy="100" r="30" stroke="white" stroke-width="0.5"/>
    <line x1="100" y1="10" x2="100" y2="190" stroke="white" stroke-width="0.5"/>
    <line x1="10" y1="100" x2="190" y2="100" stroke="white" stroke-width="0.5"/>
    <line x1="27" y1="27" x2="173" y2="173" stroke="white" stroke-width="0.5"/>
    <line x1="173" y1="27" x2="27" y2="173" stroke="white" stroke-width="0.5"/>
    <line x1="55" y1="10" x2="145" y2="190" stroke="white" stroke-width="0.3"/>
    <line x1="145" y1="10" x2="55" y2="190" stroke="white" stroke-width="0.3"/>
    <line x1="10" y1="55" x2="190" y2="145" stroke="white" stroke-width="0.3"/>
    <line x1="10" y1="145" x2="190" y2="55" stroke="white" stroke-width="0.3"/>
    <circle cx="100" cy="100" r="8" stroke="white" stroke-width="0.5" fill="none"/>
  </svg>

  <div class="hero-inner">
    <div>
      <div class="hero-logos">
        <div class="logo-pill">
          <img src="{{ asset('images/embassy-india.png') }}" alt="">
          Embassy of India
        </div>
        <div class="logo-pill">
          <img src="{{ asset('images/iop-unwahas.jpeg') }}" alt="">
          IOP Unwahas
        </div>
        <div class="logo-pill">
          <img src="{{ asset('images/unwahas-logo.png') }}" alt="">
          UNWAHAS
        </div>
      </div>

      <div class="hero-eyebrow">
        <div class="hero-eyebrow-line"></div>
        <span class="hero-eyebrow-text">Universitas Wahid Hasyim Semarang</span>
      </div>

      <h1 class="hero-title">
        International<br>
        <em>Yoga Festival</em>
        2026
      </h1>

      <p class="hero-sub-theme">Yoga for Healthy Ageing</p>

      <p class="hero-tagline">
        Empowering healthy, active, and meaningful ageing through yoga, wellness, and international collaboration.
      </p>

      <div class="hero-collab">
        Organized by <strong>Universitas Wahid Hasyim Semarang</strong><br>
        In collaboration with <strong>Embassy of India, Jakarta</strong> &amp; <strong>International Office and Partnership</strong>
      </div>

      <div class="hero-btns">
        <a href="/register-event" class="btn-saffron">Register Now →</a>
        <a href="#schedule" class="btn-ghost-white">View Schedule</a>
      </div>
    </div>

    <div class="hero-poster-wrap">
      <div class="hero-poster-frame"></div>
      <div class="hero-poster-frame2"></div>
      <img class="hero-poster-img" src="{{ asset('images/poster.jpeg') }}" alt="International Yoga Festival 2026 Poster">
    </div>
  </div>
</section>

<!-- ── INFO STRIP ── -->
<div class="info-strip">
  <div class="info-strip-inner">
    <div class="info-cell">
      <div class="ic-icon">📅</div>
      <div>
        <div class="ic-label">Date</div>
        <div class="ic-value">Saturday, 20 June 2026</div>
        <div class="ic-sub">06.30 AM – 09.00 AM WIB</div>
      </div>
    </div>
    <div class="info-cell">
      <div class="ic-icon">📍</div>
      <div>
        <div class="ic-label">Venue</div>
        <div class="ic-value">UNWAHAS Stadium</div>
        <div class="ic-sub">Football Field, Campus 2, Gunungpati</div>
      </div>
    </div>
    <div class="info-cell">
      <div class="ic-icon">🎫</div>
      <div>
        <div class="ic-label">Entry Fee</div>
        <div class="ic-value">Rp 50.000</div>
        <div class="ic-sub">Open for all ages · T-shirt + mat included</div>
      </div>
    </div>
  </div>
</div>

<!-- ── COUNTDOWN ── -->
<section class="countdown">
  <div class="countdown-inner">
    <div class="cd-eye">Event starts in</div>
    <p class="cd-heading">Saturday, 20 June 2026 · 06.30 WIB</p>
    <div class="cd-units" id="cd-units">
      <div class="cd-unit">
        <div class="cd-box"><span class="cd-num" id="cd-d">00</span></div>
        <span class="cd-lbl">Days</span>
      </div>
      <div class="cd-sep">:</div>
      <div class="cd-unit">
        <div class="cd-box"><span class="cd-num" id="cd-h">00</span></div>
        <span class="cd-lbl">Hours</span>
      </div>
      <div class="cd-sep">:</div>
      <div class="cd-unit">
        <div class="cd-box"><span class="cd-num" id="cd-m">00</span></div>
        <span class="cd-lbl">Minutes</span>
      </div>
      <div class="cd-sep">:</div>
      <div class="cd-unit">
        <div class="cd-box"><span class="cd-num" id="cd-s">00</span></div>
        <span class="cd-lbl">Seconds</span>
      </div>
    </div>
    <p class="cd-done" id="cd-done">The event has begun — see you on the mat! 🧘</p>

    <div class="cal-wrap">
      <button class="cal-btn" id="cal-btn" onclick="toggleCal()">
        📅 Add to Calendar
      </button>
      <div class="cal-dropdown" id="cal-dropdown">
        <a class="cal-option" id="gcal-link" href="#" target="_blank" onclick="closeCal()">
          <span class="cal-option-icon">🗓️</span> Google Calendar
        </a>
        <a class="cal-option" id="ical-link" href="#" download="yoga-festival-2026.ics" onclick="closeCal()">
          <span class="cal-option-icon">🍎</span> Apple / iCal
        </a>
        <a class="cal-option" id="outlook-link" href="#" target="_blank" onclick="closeCal()">
          <span class="cal-option-icon">📘</span> Outlook
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ── SCHEDULE ── -->
<section id="schedule" class="section schedule-bg">
  <div class="section-inner">
    <div class="tc reveal">
      <div class="section-eyebrow">
        <div class="section-eyebrow-line"></div>
        <span class="section-eyebrow-text">Program</span>
        <div class="section-eyebrow-line"></div>
      </div>
      <h2 class="section-title">Event <em>Schedule</em></h2>
    </div>
    <div class="schedule-grid reveal">
      <div class="sched-item">
        <div class="sched-num">01</div>
        <div class="sched-time">05.30 – 06.00</div>
        <div class="sched-title">Gate Opens &amp; Registration</div>
        <p class="sched-desc">On-site registration. Receive your wristband, t-shirt, and yoga mat.</p>
      </div>
      <div class="sched-item">
        <div class="sched-num">02</div>
        <div class="sched-time">06.00 – 06.15</div>
        <div class="sched-title">Opening Ceremony</div>
        <p class="sched-desc">Official opening by university and embassy representatives.</p>
      </div>
      <div class="sched-item">
        <div class="sched-num">03</div>
        <div class="sched-time">06.15 – 06.30</div>
        <div class="sched-title">Welcome Remarks</div>
        <p class="sched-desc">Welcoming address from organizers and honored guests.</p>
      </div>
      <div class="sched-item">
        <div class="sched-num">04</div>
        <div class="sched-time">06.30 – 08.00</div>
        <div class="sched-title">Mass Yoga Session</div>
        <p class="sched-desc">Guided by Anjasmara and assistant instructors for all 2,000 participants.</p>
      </div>
      <div class="sched-item">
        <div class="sched-num">05</div>
        <div class="sched-time">08.00 – Finish</div>
        <div class="sched-title">Closing &amp; Networking</div>
        <p class="sched-desc">Closing session, photo opportunities, and free networking time.</p>
      </div>
    </div>
    <p class="sched-note reveal">* Schedule may be adjusted by the organizing committee. Please arrive by 05.45 WIB.</p>
  </div>
</section>

<!-- ── IMPORTANT NOTICE ── -->
<div class="notice-banner">
  <div class="notice-banner-inner">
    <div class="notice-title reveal">⚠️ Penting untuk Peserta</div>
    <div class="notice-cards">
      <div class="notice-card reveal">
        <div class="notice-icon">🚗</div>
        <div>
          <div class="notice-card-title">Diusahakan Tidak Membawa Mobil</div>
          <p class="notice-card-text">Kapasitas parkir terbatas untuk <strong>2.000 peserta</strong>. Sangat disarankan menggunakan <strong>motor, angkutan umum, atau datang bersama rombongan</strong> untuk menghindari kemacetan dan kesulitan parkir di area Campus 2.</p>
        </div>
      </div>
      <div class="notice-card reveal reveal-delay-1">
        <div class="notice-icon">⏰</div>
        <div>
          <div class="notice-card-title">Datang Tepat Waktu — Paling Lambat 05.45 WIB</div>
          <p class="notice-card-text">Gate dibuka pukul <strong>05.30 WIB</strong>. Peserta wajib hadir paling lambat <strong>05.45 WIB</strong> untuk registrasi ulang, pengambilan wristband, kaos, dan penempatan yoga mat sebelum Opening Ceremony pukul 06.00 WIB.</p>
        </div>
      </div>
      <div class="notice-card reveal reveal-delay-2">
        <div class="notice-icon">🪪</div>
        <div>
          <div class="notice-card-title">Wristband Wajib Dipakai</div>
          <p class="notice-card-text">Gelang peserta yang diterima saat registrasi merupakan <strong>identitas resmi</strong> untuk memasuki area kegiatan dan mendapatkan seluruh fasilitas dari panitia. Wajib dipakai sepanjang acara.</p>
        </div>
      </div>
      <div class="notice-card reveal reveal-delay-3">
        <div class="notice-icon">☀️</div>
        <div>
          <div class="notice-card-title">Acara di Luar Ruangan</div>
          <p class="notice-card-text">Event dilaksanakan <strong>outdoor</strong>. Siapkan <strong>sunscreen, topi/pelindung kepala</strong>, dan bawa <strong>payung lipat atau jas hujan ringan</strong> sebagai antisipasi perubahan cuaca.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="section benefits-bg">
  <div class="section-inner">
    <div class="tc reveal">
      <div class="section-eyebrow">
        <div class="section-eyebrow-line"></div>
        <span class="section-eyebrow-text">Benefits of participation</span>
        <div class="section-eyebrow-line"></div>
      </div>
      <h2 class="section-title">Why <em>Join?</em></h2>
    </div>
    <div class="benefits-grid">
      <div class="benefit-card reveal">
        <div class="benefit-icon-wrap">🧘</div>
        <div class="benefit-title">Flexibility &amp; Mobility</div>
        <p class="benefit-text">Improve your body's flexibility and overall physical mobility through guided practice.</p>
      </div>
      <div class="benefit-card reveal reveal-delay-1">
        <div class="benefit-icon-wrap">❤️</div>
        <div class="benefit-title">Healthy Ageing</div>
        <p class="benefit-text">Support a sustainable healthy ageing process through regular yoga practice.</p>
      </div>
      <div class="benefit-card reveal reveal-delay-2">
        <div class="benefit-icon-wrap">🧠</div>
        <div class="benefit-title">Mental Wellbeing</div>
        <p class="benefit-text">Enhance mental clarity and reduce stress through mindful, intentional movement.</p>
      </div>
      <div class="benefit-card reveal reveal-delay-3">
        <div class="benefit-icon-wrap">🌏</div>
        <div class="benefit-title">Global Harmony</div>
        <p class="benefit-text">Build community and global harmony alongside 2,000 participants.</p>
      </div>
      <div class="benefit-card reveal reveal-delay-3">
        <div class="benefit-icon-wrap">🎓</div>
        <div class="benefit-title">Certificate</div>
        <p class="benefit-text">Receive an official participation certificate from the organizers.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── FACILITIES ── -->
<section class="section facilities-bg">
  <div class="section-inner">
    <div class="tc reveal">
      <div class="section-eyebrow">
        <div class="section-eyebrow-line"></div>
        <span class="section-eyebrow-text">What you get</span>
        <div class="section-eyebrow-line"></div>
      </div>
      <h2 class="section-title">Event <em>Facilities</em></h2>
    </div>
    <div class="facilities-grid reveal">
      <div class="facility-card">
        <div class="fac-icon">👕</div>
        <div>
          <div class="fac-name">Official T-Shirt</div>
          <p class="fac-desc">Kaos peserta resmi Yoga Festival 2026.</p>
        </div>
      </div>
      <div class="facility-card">
        <div class="fac-icon">🧘</div>
        <div>
          <div class="fac-name">Free Yoga Mat</div>
          <p class="fac-desc">Yoga mat gratis, tidak perlu membawa sendiri.</p>
        </div>
      </div>
      <div class="facility-card">
        <div class="fac-icon">🍱</div>
        <div>
          <div class="fac-name">Konsumsi</div>
          <p class="fac-desc">Snack dan minuman disediakan panitia.</p>
        </div>
      </div>
      <div class="facility-card">
        <div class="fac-icon">🏥</div>
        <div>
          <div class="fac-name">Medical Team</div>
          <p class="fac-desc">Health tent, tim medis, dan ambulans siaga.</p>
        </div>
      </div>
      <div class="facility-card">
        <div class="fac-icon">🅿️</div>
        <div>
          <div class="fac-name">Free Parking</div>
          <p class="fac-desc">Area parkir tersedia di halaman Campus 2.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── GUEST ── -->
<section id="guest" class="guest-sec">
  <div class="guest-pattern"></div>
  <div class="guest-inner">
    <div class="reveal">
      <div class="guest-eye">
        <div class="guest-eye-line"></div>
        <span class="guest-eye-text">Special Guest &amp; Main Instructor</span>
      </div>
      <h2 class="guest-name">Anjasmara</h2>
      <p class="guest-role">Renowned Actor &amp;<br>Master Yoga Practitioner</p>
      <div class="guest-badges">
        <span class="gbadge">Actor</span>
        <span class="gbadge">Yoga Master</span>
        <span class="gbadge">Main Instructor</span>
      </div>
      <div class="guest-divider"></div>
      <p class="guest-desc">
        Anjasmara will personally lead the mass yoga session for all 2,000 participants. A celebrated Indonesian actor and dedicated yoga master, he brings decades of holistic wellness practice to inspire everyone toward a healthier, more mindful life.
      </p>
    </div>
    <div class="reveal reveal-delay-2">
      <div class="guest-photo-wrap">
        <div class="guest-photo-ring1"></div>
        <div class="guest-photo-ring2"></div>
        <img class="guest-photo-img" src="{{ asset('images/anjasmara.jpeg') }}" alt="Anjasmara — Main Instructor">
        <span class="guest-photo-tag">Main Instructor</span>
      </div>
    </div>
  </div>
</section>

<!-- ── WHAT TO BRING ── -->
<section class="section bring-bg">
  <div class="section-inner">
    <div class="tc reveal">
      <div class="section-eyebrow">
        <div class="section-eyebrow-line"></div>
        <span class="section-eyebrow-text">Preparation</span>
        <div class="section-eyebrow-line"></div>
      </div>
      <h2 class="section-title">What to <em>Bring</em></h2>
    </div>
    <div class="bring-grid reveal">
      <div class="bring-card">
        <div class="bring-icon">🧴</div>
        <span class="bring-text">Personal tumbler filled with sufficient drinking water.</span>
      </div>
      <div class="bring-card">
        <div class="bring-icon">💊</div>
        <span class="bring-text">Personal medication if necessary.</span>
      </div>
      <div class="bring-card">
        <div class="bring-icon">🏃</div>
        <span class="bring-text">Comfortable, modest sportswear that allows free movement.</span>
      </div>
      <div class="bring-card">
        <div class="bring-icon">🧢</div>
        <span class="bring-text">Hat or head covering — event is held outdoors.</span>
      </div>
      <div class="bring-card">
        <div class="bring-icon">🧻</div>
        <span class="bring-text">A small personal towel or cloth.</span>
      </div>
      <div class="bring-card">
        <div class="bring-icon">☂️</div>
        <span class="bring-text">Foldable umbrella or lightweight raincoat as weather precaution.</span>
      </div>
    </div>
    <div class="bring-note-wrap" style="margin-top: 24px;">
      <span class="bring-note">✅ Yoga mat <strong>tidak perlu</strong> dibawa — sudah disediakan panitia.</span>
    </div>
  </div>
</section>

<!-- ── GUIDELINES ── -->
<section class="section guidelines-bg">
  <div class="section-inner">
    <div class="tc reveal">
      <div class="section-eyebrow">
        <div class="section-eyebrow-line"></div>
        <span class="section-eyebrow-text">Participant guidelines</span>
        <div class="section-eyebrow-line"></div>
      </div>
      <h2 class="section-title">Rules &amp; <em>Conduct</em></h2>
    </div>
    <div class="guidelines-grid reveal">
      <div class="gl-card">
        <div class="gl-head">
          <div class="gl-num">✓</div>
          <div class="gl-title">Code of Conduct</div>
        </div>
        <ul class="gl-list">
          <li><span class="gl-check">✓</span> Maintain order and mutual comfort throughout the event.</li>
          <li><span class="gl-check">✓</span> Respect instructors, committee, and fellow participants.</li>
          <li><span class="gl-check">✓</span> Keep the event environment clean at all times.</li>
          <li><span class="gl-check">✓</span> Follow all instructions from the organizing committee.</li>
          <li><span class="gl-check">✓</span> Use event facilities responsibly and appropriately.</li>
          <li><span class="gl-check">✓</span> Bring own tumbler and reduce single-use plastics (Green Event).</li>
        </ul>
      </div>
      <div class="gl-card">
        <div class="gl-head">
          <div class="gl-num red">✗</div>
          <div class="gl-title">Prohibited</div>
        </div>
        <ul class="gl-list">
          <li><span class="gl-x">✗</span> Alcoholic beverages or illegal drugs.</li>
          <li><span class="gl-x">✗</span> Smoking anywhere within the event area.</li>
          <li><span class="gl-x">✗</span> Sharp or dangerous objects.</li>
          <li><span class="gl-x">✗</span> Disrupting the event proceedings.</li>
          <li><span class="gl-x">✗</span> Littering — use bins provided.</li>
          <li><span class="gl-x">✗</span> Entering VIP or restricted zones without authorization.</li>
        </ul>
      </div>
      <div class="gl-card">
        <div class="gl-head">
          <div class="gl-num">🚗</div>
          <div class="gl-title">Arrival &amp; Parking</div>
        </div>
        <ul class="gl-list">
          <li><span class="gl-check">✓</span> Enter through the <strong>West Entrance</strong> of Football Field, Campus 2.</li>
          <li><span class="gl-check">✓</span> Parking available at front yard of Campus 2 main gate.</li>
          <li><span class="gl-check">✓</span> Follow directions from parking attendants and volunteers.</li>
          <li><span class="gl-check">✓</span> Arrive at least 30 minutes before the event (by 05.45 WIB).</li>
        </ul>
      </div>
      <div class="gl-card">
        <div class="gl-head">
          <div class="gl-num">🏥</div>
          <div class="gl-title">Health &amp; Safety</div>
        </div>
        <ul class="gl-list">
          <li><span class="gl-check">✓</span> Adjust yoga movements to your own physical condition.</li>
          <li><span class="gl-check">✓</span> Never force movements that cause pain or discomfort.</li>
          <li><span class="gl-check">✓</span> Contact medical staff if you feel dizzy or unwell.</li>
          <li><span class="gl-check">✓</span> Apply sunscreen — event is held outdoors.</li>
          <li><span class="gl-check">✓</span> In an emergency, follow instructions to the assembly point.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ── CONTACT ── -->
<section id="contact" class="section contact-bg">
  <div class="section-inner">
    <div class="tc reveal">
      <div class="section-eyebrow">
        <div class="section-eyebrow-line"></div>
        <span class="section-eyebrow-text">Get in touch</span>
        <div class="section-eyebrow-line"></div>
      </div>
      <h2 class="section-title">Contact &amp; <em>Info</em></h2>
    </div>
    <div class="contact-grid reveal">
      <div class="contact-card">
        <div class="contact-icon-wrap">📞</div>
        <div>
          <div class="contact-label">Contact Person</div>
          <div class="contact-value">Bu Eva — 081329536201</div>
        </div>
      </div>
      <div class="contact-card">
        <div class="contact-icon-wrap">🌐</div>
        <div>
          <div class="contact-label">Website</div>
          <div class="contact-value">www.unwahas.ac.id</div>
        </div>
      </div>
      <div class="contact-card">
        <div class="contact-icon-wrap">📘</div>
        <div>
          <div class="contact-label">Facebook</div>
          <div class="contact-value">Unwahasaja</div>
        </div>
      </div>
      <div class="contact-card">
        <div class="contact-icon-wrap">▶️</div>
        <div>
          <div class="contact-label">YouTube</div>
          <div class="contact-value">Unwahas TV</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── PARTNERS ── -->
<section class="section partners-bg" style="padding-top: 0;">
  <div class="section-inner">
    <div class="tc reveal">
      <div class="section-eyebrow">
        <div class="section-eyebrow-line"></div>
        <span class="section-eyebrow-text">Supported by</span>
        <div class="section-eyebrow-line"></div>
      </div>
      <h2 class="section-title">Our <em>Partners</em></h2>
    </div>
    <div class="partners-row reveal">
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
  <div class="cta-bg"></div>
  <div class="cta-decor"></div>
  <div class="cta-decor2"></div>
  <p class="cta-quote">"Yoga Today, Healthy Tomorrow, Stronger Together for a Better Ageing."</p>
  <h2 class="cta-title">Join 2,000 <em>Participants</em></h2>
  <p class="cta-subtitle">Saturday, 20 June 2026 · UNWAHAS Stadium, Gunungpati, Semarang</p>
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

<script>
/* ── COUNTDOWN ── */
(function() {
  var target = new Date('2026-06-20T06:30:00+07:00').getTime();
  var els = { d: document.getElementById('cd-d'), h: document.getElementById('cd-h'), m: document.getElementById('cd-m'), s: document.getElementById('cd-s') };
  var prev = { d: null, h: null, m: null, s: null };
  function pad(n) { return String(Math.max(0, n)).padStart(2, '0'); }
  function flip(el, key, val) {
    if (prev[key] === val) return;
    prev[key] = val;
    el.classList.add('flip');
    setTimeout(function() { el.textContent = val; el.classList.remove('flip'); }, 250);
  }
  function tick() {
    var diff = target - Date.now();
    if (diff <= 0) {
      document.getElementById('cd-units').style.display = 'none';
      document.getElementById('cd-done').style.display = 'block';
      return;
    }
    flip(els.d, 'd', pad(Math.floor(diff / 86400000)));
    flip(els.h, 'h', pad(Math.floor((diff % 86400000) / 3600000)));
    flip(els.m, 'm', pad(Math.floor((diff % 3600000) / 60000)));
    flip(els.s, 's', pad(Math.floor((diff % 60000) / 1000)));
  }
  tick(); setInterval(tick, 1000);
})();

/* ── HAMBURGER TOGGLE ── */
(function() {
  var btn = document.getElementById('nav-hamburger');
  var drawer = document.getElementById('nav-drawer');
  btn.addEventListener('click', function() {
    btn.classList.toggle('open');
    drawer.classList.toggle('open');
  });
  // Close on link click
  drawer.querySelectorAll('a').forEach(function(a) {
    a.addEventListener('click', function() {
      btn.classList.remove('open');
      drawer.classList.remove('open');
    });
  });
})();
(function() {
  var els = document.querySelectorAll('.reveal');
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
  }, { threshold: 0.1 });
  els.forEach(function(el) { io.observe(el); });
})();

/* ── ADD TO CALENDAR ── */
(function() {
  var title = 'International Yoga Festival 2026';
  var loc = 'Football Field Campus 2, Universitas Wahid Hasyim, Gunungpati, Semarang';
  var desc = 'Yoga for Healthy Ageing — led by Anjasmara. Gate opens 05.30 WIB. Wajib hadir paling lambat 05.45 WIB. Yoga mat disediakan panitia.';
  var startUTC = '20260619T233000Z';
  var endUTC   = '20260620T020000Z';

  var gParams = new URLSearchParams({
    action: 'TEMPLATE', text: title, location: loc, details: desc,
    dates: startUTC + '/' + endUTC
  });
  document.getElementById('gcal-link').href = 'https://calendar.google.com/calendar/render?' + gParams.toString();

  var oParams = new URLSearchParams({
    path: '/calendar/action/compose', rru: 'addevent',
    subject: title, location: loc, body: desc,
    startdt: '2026-06-20T06:30:00', enddt: '2026-06-20T09:00:00'
  });
  document.getElementById('outlook-link').href = 'https://outlook.live.com/calendar/0/deeplink/compose?' + oParams.toString();

  var ics = [
    'BEGIN:VCALENDAR', 'VERSION:2.0', 'PRODID:-//IYF2026//EN', 'CALSCALE:GREGORIAN',
    'BEGIN:VEVENT',
    'DTSTART;TZID=Asia/Jakarta:20260620T063000',
    'DTEND;TZID=Asia/Jakarta:20260620T090000',
    'SUMMARY:' + title,
    'DESCRIPTION:' + desc,
    'LOCATION:' + loc,
    'BEGIN:VALARM', 'TRIGGER:-PT60M', 'ACTION:DISPLAY', 'DESCRIPTION:Reminder', 'END:VALARM',
    'END:VEVENT', 'END:VCALENDAR'
  ].join('\r\n');
  var blob = new Blob([ics], { type: 'text/calendar;charset=utf-8' });
  document.getElementById('ical-link').href = URL.createObjectURL(blob);
})();

function toggleCal() {
  document.getElementById('cal-dropdown').classList.toggle('open');
}
function closeCal() {
  setTimeout(function() { document.getElementById('cal-dropdown').classList.remove('open'); }, 150);
}
document.addEventListener('click', function(e) {
  if (!e.target.closest('.cal-wrap')) document.getElementById('cal-dropdown').classList.remove('open');
});
</script>
</body>
</html>