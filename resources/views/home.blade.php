@extends('layouts.app')

@section('content')

<!-- HERO -->
<header class="hero">
  <div class="container hero-grid">
    <div>
      <span class="badge"><span class="dot"></span> Trusted by 2M+ job seekers</span>
      <h1>Build a <span class="hl">Professional CV<svg viewBox="0 0 200 12" preserveAspectRatio="none"><path d="M2 9 Q 50 2 100 7 T 198 5" stroke="#0070D0" stroke-width="4" fill="none" stroke-linecap="round"/></svg></span> in Minutes</h1>
      <p class="lead">Pick a beautiful template, fill in your details, and download a ready-to-send CV. No design skills needed — perfect for local &amp; international jobs.</p>
      <div class="hero-cta">
        <a href="{{ route('editor') }}" class="btn btn-gold">Create My CV <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        <a href="{{ route('templates') }}" class="btn btn-ghost">Browse Templates</a>
      </div>
      <div class="hero-stats">
        <div class="stat"><b>2M+</b><span>CVs created</span></div>
        <div class="stat"><b>25+</b><span>Pro templates</span></div>
        <div class="stat"><b>100%</b><span>Free to start</span></div>
      </div>
    </div>
    <div class="mock-wrap">
      <div class="mock-glow"></div>
      <div class="mock">
        <div class="m-name">Tharindu Silva</div>
        <div class="m-title">Senior Software Engineer</div>
        <div class="m-line"></div>
        <div class="m-sec">Profile</div>
        <p style="font-size:12px;color:#6b6350">Results-driven engineer with 6+ years building scalable web apps...</p>
        <div class="m-sec">Experience</div>
        <div class="m-row"><b>Senior Software Engineer</b><span>2021 – Present</span></div>
        <div class="m-row"><span style="color:#0060C0">TechNova Solutions</span><span></span></div>
        <div class="m-row"><b>Software Engineer</b><span>2018 – 2021</span></div>
        <div class="m-row"><span style="color:#0060C0">Inforox (Pvt) Ltd</span><span></span></div>
        <div class="m-sec">Skills</div>
        <div><span class="m-pill">Laravel</span><span class="m-pill">PHP</span><span class="m-pill">Vue.js</span><span class="m-pill">MySQL</span></div>
      </div>
      <div class="mock-badge b1">✓ ATS Friendly</div>
      <div class="mock-badge b2">⬇ Download PDF</div>
    </div>
  </div>
</header>

<!-- STRIP -->
<div class="strip"><span>LARAVEL POWERED</span><span>ATS FRIENDLY</span><span>PDF READY</span><span>100% FREE</span></div>

<!-- FEATURES -->
<section class="section" id="features">
  <div class="container">
    <div class="sec-head">
      <span class="kicker">Why CVNova</span>
      <h2>Everything you need to land your dream job</h2>
      <p>From professional templates to instant PDF download — we make your CV stand out.</p>
    </div>
    <div class="features">
      <div class="feature">
        <div class="f-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M3 9h18M9 21V9"/></svg></div>
        <h3>25+ Premium Templates</h3>
        <p>Classic, modern, minimal &amp; creative designs built by professionals for every industry.</p>
      </div>
      <div class="feature">
        <div class="f-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 3l2.7 5.6 6.3.8-4.6 4.3 1.2 6.2-5.6-3-5.6 3 1.2-6.2L3 9.4l6.3-.8z"/></svg></div>
        <h3>ATS-Friendly Layouts</h3>
        <p>Clean structures that pass applicant tracking systems and reach real human recruiters.</p>
      </div>
      <div class="feature">
        <div class="f-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M8 13h8M8 17h5"/></svg></div>
        <h3>Instant PDF Download</h3>
        <p>One click and your CV is ready as a pixel-perfect PDF, Word export &amp; shareable link.</p>
      </div>
      <div class="feature">
        <div class="f-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 21s-7-4.6-9.3-9A5.4 5.4 0 0 1 12 6.7 5.4 5.4 0 0 1 21.3 12c-2.3 4.4-9.3 9-9.3 9z"/></svg></div>
        <h3>Live Real-Time Preview</h3>
        <p>See your CV update instantly as you type — no refresh, no guessing, no surprises.</p>
      </div>
      <div class="feature">
        <div class="f-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M12 2a7 7 0 0 0-4 12.7V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.3A7 7 0 0 0 12 2z"/><path d="M9 21h6"/></svg></div>
        <h3>Smart Suggestions</h3>
        <p>Filler text and achievement examples to help you write experience sections that impress.</p>
      </div>
      <div class="feature">
        <div class="f-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><path d="M20 12v8H4v-8M2 7l10-4 10 4M6 7v6a3 3 0 0 0 6 0V7M12 7v6a3 3 0 0 0 6 0V7"/></svg></div>
        <h3>Built for Sri Lanka</h3>
        <p>Templates tuned for local employers, banks, IT firms &amp; government applications.</p>
      </div>
    </div>
  </div>
</section>

<!-- TEMPLATES PREVIEW -->
<section class="section alt">
  <div class="container">
    <div class="sec-head">
      <span class="kicker">Templates</span>
      <h2>Choose a template that fits your career</h2>
      <p>Every template is ATS-friendly and beautifully designed. Preview live in the builder.</p>
    </div>
    <div class="tpl-grid" id="tplGrid"></div>
    <div style="text-align:center;margin-top:44px">
      <a href="{{ route('templates') }}" class="btn btn-gold">View All Templates</a>
    </div>
  </div>
</section>

<!-- HOW IT WORKS (DARK) -->
<section class="section dark">
  <div class="container">
    <div class="sec-head">
      <span class="kicker">How it works</span>
      <h2>Your dream CV in 3 easy steps</h2>
      <p>No sign-up required to start. Create, preview, download — done.</p>
    </div>
    <div class="steps">
      <div class="step">
        <div class="num">1</div>
        <h3>Pick a Template</h3>
        <p>Choose from 25+ professionally designed templates for any industry.</p>
      </div>
      <div class="step">
        <div class="num">2</div>
        <h3>Fill Your Details</h3>
        <p>Type your info once. Watch the live preview build your CV in real time.</p>
      </div>
      <div class="step">
        <div class="num">3</div>
        <h3>Download PDF</h3>
        <p>Export a perfect PDF in one click and send it to employers right away.</p>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section alt">
  <div class="container">
    <div class="sec-head">
      <span class="kicker">Success stories</span>
      <h2>Loved by job seekers in Sri Lanka &amp; beyond</h2>
    </div>
    <div class="testi-grid">
      <div class="testi">
        <div class="stars">★★★★★</div>
        <p>"Got my first banking job interview within a week of using CVNova. The classic template made my CV look so professional!"</p>
        <div class="who"><div class="av">NS</div><div><b>Nimasha Silva</b><span>Graduate, Colombo</span></div></div>
      </div>
      <div class="testi">
        <div class="stars">★★★★★</div>
        <p>"As a developer I hate writing CVs. The live preview and PDF download saved me hours. My new CV landed 3 interviews in 2 weeks."</p>
        <div class="who"><div class="av">KP</div><div><b>Kasun Perera</b><span>Software Engineer, Kandy</span></div></div>
      </div>
      <div class="testi">
        <div class="stars">★★★★★</div>
        <p>"The modern template with the dark sidebar looks stunning. Recruiters keep complimenting my CV. Highly recommended!"</p>
        <div class="who"><div class="av">AR</div><div><b>Amaya Rathnayake</b><span>Marketing Executive, Galle</span></div></div>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section class="section dark" id="pricing">
  <div class="container">
    <div class="sec-head">
      <span class="kicker">Pricing</span>
      <h2>Simple plans for every stage</h2>
      <p>Start free forever. Upgrade only when you need more.</p>
    </div>
    <div class="price-grid">
      <div class="price-card">
        <div class="p-name">Free</div>
        <div class="p-price">Rs 0<small>/forever</small></div>
        <div class="p-desc">Perfect for students &amp; quick CVs</div>
        <ul>
          <li>3 classic templates</li>
          <li>1 page CV</li>
          <li>PDF download</li>
          <li>No watermark</li>
        </ul>
        <a href="{{ route('editor') }}" class="btn btn-ghost">Start Free</a>
      </div>
      <div class="price-card featured">
        <div class="pop">Most Popular</div>
        <div class="p-name">Pro</div>
        <div class="p-price">Rs 1,500<small>/month</small></div>
        <div class="p-desc">For serious job seekers</div>
        <ul>
          <li>All 25+ premium templates</li>
          <li>Unlimited pages</li>
          <li>Word (.docx) export</li>
          <li>ATS score checker</li>
          <li>Shareable online link</li>
        </ul>
        <a href="{{ route('editor') }}" class="btn btn-gold">Go Pro</a>
      </div>
      <div class="price-card">
        <div class="p-name">Career</div>
        <div class="p-price">Rs 9,000<small>/year</small></div>
        <div class="p-desc">Best value for job hunting</div>
        <ul>
          <li>Everything in Pro</li>
          <li>Cover letter builder</li>
          <li>LinkedIn profile tips</li>
          <li>Priority support</li>
        </ul>
        <a href="{{ route('editor') }}" class="btn btn-ghost">Get Career</a>
      </div>
    </div>
  </div>
</section>

@endsection
