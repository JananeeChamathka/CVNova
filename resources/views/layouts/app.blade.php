<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CVNova — Build a professional CV in minutes. Free CV builder with premium templates, live preview and instant PDF download.">
    <title>@yield('title', 'CVNova — Build a Professional CV in Minutes')</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
</head>
<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar">
  <div class="container nav-inner">
    <a href="{{ route('home') }}" class="brand">
      <img src="{{ asset('img/logo.png') }}" alt="CVNova logo" class="logo-img">
      CV<em>Nova</em>
    </a>
    <div class="nav-links" id="navLinks">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('templates') }}" class="{{ request()->routeIs('templates') ? 'active' : '' }}">Templates</a>
      <a href="{{ route('editor') }}" class="{{ request()->routeIs('editor', 'editor.template') ? 'active' : '' }}">CV Builder</a>
      <a href="{{ route('home') }}#features">Features</a>
      <a href="{{ route('home') }}#pricing">Pricing</a>
    </div>
    <div class="nav-cta">
      <a href="{{ route('editor') }}" class="btn btn-gold btn-sm">Start Free</a>
      <button class="burger menu-btn" onclick="toggleMenu()"><span></span><span></span><span></span></button>
    </div>
  </div>
</nav>

@yield('content')

<!-- ================= FOOTER ================= -->
<footer>
  <div class="container">
    <div class="foot-grid">
      <div class="foot-brand">
        <a href="{{ route('home') }}" class="brand">
          <img src="{{ asset('img/logo.png') }}" alt="CVNova logo" class="logo-img">
          CV<em>Nova</em>
        </a>
        <p>The fastest way to build a professional CV in Sri Lanka. Free templates, live preview and one-click PDF download.</p>
        <div class="social">
          <a href="#" title="Facebook" aria-label="Facebook"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M14 9h3V6h-3c-2 0-3.5 1.5-3.5 3.5V12H8v3h2.5v6H14v-6h2.5l.5-3H14v-1.5c0-.3.2-.5.5-.5z"/></svg></a>
          <a href="#" title="LinkedIn" aria-label="LinkedIn"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M6.5 8.5H3.5V21h3V8.5zM5 7a1.8 1.8 0 1 0 0-3.6A1.8 1.8 0 0 0 5 7zM21 21h-3v-6.2c0-1.6-.6-2.8-2.1-2.8-1.1 0-1.8.8-2.1 1.5-.1.3-.1.6-.1 1V21h-3V8.5h3v1.7c.4-.7 1.4-1.7 3.2-1.7 2.4 0 4.1 1.5 4.1 4.9V21z"/></svg></a>
          <a href="#" title="TikTok" aria-label="TikTok"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M16.6 3c.4 2 1.7 3.4 3.9 3.6v3c-1.5 0-2.8-.4-3.9-1.2v5.9c0 3.7-2.6 6.2-6 6.2A6 6 0 0 1 4.6 14a6 6 0 0 1 7.6-5.8v3.2a2.9 2.9 0 0 0-4.3 2.6 2.9 2.9 0 0 0 5.8.7V3h2.9z"/></svg></a>
          <a href="#" title="YouTube" aria-label="YouTube"><svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M21.6 7.2a2.8 2.8 0 0 0-2-2C17.9 4.8 12 4.8 12 4.8s-5.9 0-7.6.4a2.8 2.8 0 0 0-2 2C2 8.9 2 12 2 12s0 3.1.4 4.8a2.8 2.8 0 0 0 2 2c1.7.4 7.6.4 7.6.4s5.9 0 7.6-.4a2.8 2.8 0 0 0 2-2c.4-1.7.4-4.8.4-4.8s0-3.1-.4-4.8zM10 15.2V8.8L15.5 12 10 15.2z"/></svg></a>
        </div>
      </div>
      <div>
        <h4>Product</h4>
        <a href="{{ route('templates') }}">CV Templates</a>
        <a href="{{ route('editor') }}">CV Builder</a>
        <a href="{{ route('editor') }}">Cover Letter Builder</a>
        <a href="{{ route('home') }}#pricing">Pricing</a>
      </div>
      <div>
        <h4>Resources</h4>
        <a href="{{ route('home') }}#features">Features</a>
        <a href="#">Career Tips</a>
        <a href="#">CV Guide</a>
        <a href="#">Interview Training</a>
      </div>
      <div>
        <h4>Company</h4>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© {{ date('Y') }} CVNova — All rights reserved. Made with 💙 in Sri Lanka.</span>
      <span>Powered by Laravel {{ app()->version() }}</span>
    </div>
  </div>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
