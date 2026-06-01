<x-guest-layout>
  <style>
    body { background: #FAF7F0; }
    .login-wrap {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 16px;
      font-family: 'DM Sans', sans-serif;
    }
    .login-card {
      background: #fff;
      border: 1px solid #E4DDD0;
      border-radius: 20px;
      padding: 40px;
      width: 100%;
      max-width: 420px;
    }
    .login-eyebrow {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: #4A8C62;
      margin-bottom: 6px;
    }
    .login-title {
      font-family: Georgia, serif;
      font-size: 22px;
      font-weight: 700;
      color: #1A3A2A;
      margin-bottom: 28px;
    }
    .field { margin-bottom: 18px; }
    .field label {
      display: block;
      font-size: 11px;
      font-weight: 500;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: #888;
      margin-bottom: 6px;
    }
    .field input[type="email"],
    .field input[type="password"] {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #E4DDD0;
      border-radius: 10px;
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      color: #1C1C1C;
      background: #FAF7F0;
      outline: none;
      transition: border-color 0.15s;
      box-sizing: border-box;
    }
    .field input:focus { border-color: #4A8C62; background: #fff; }
    .field-error { font-size: 12px; color: #c0392b; margin-top: 4px; }
    .remember-row {
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 20px;
    }
    .remember-row input { width: 14px; height: 14px; accent-color: #1A3A2A; }
    .remember-row span { font-size: 13px; color: #888; }
    .btn-submit {
      width: 100%;
      padding: 12px;
      background: #1A3A2A;
      color: #fff;
      border: none;
      border-radius: 10px;
      font-family: 'DM Sans', sans-serif;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.15s;
    }
    .btn-submit:hover { background: #2D5C40; }
    .forgot-link {
      display: block;
      text-align: center;
      margin-top: 16px;
      font-size: 13px;
    }
    .forgot-link a { color: #2D5C40; font-weight: 500; text-decoration: none; }
    .forgot-link a:hover { text-decoration: underline; }
    .status-msg {
      background: #EAF5EE;
      border: 1px solid #7DC99A;
      color: #1A5C30;
      border-radius: 10px;
      padding: 10px 14px;
      font-size: 13px;
      margin-bottom: 20px;
    }
  </style>

  <div class="login-wrap">
    <div class="login-card">

      <div class="login-eyebrow">International Yoga Festival 2026</div>
      <div class="login-title">Admin Login</div>

      @if (session('status'))
        <div class="status-msg">{{ session('status') }}</div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
          <label for="email">Email</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
          @error('email')<div class="field-error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
          <label for="password">Password</label>
          <input id="password" type="password" name="password" required autocomplete="current-password" />
          @error('password')<div class="field-error">{{ $message }}</div>@enderror
        </div>

        <div class="remember-row">
          <input id="remember_me" type="checkbox" name="remember">
          <span>Ingat saya</span>
        </div>

        <button type="submit" class="btn-submit">Masuk →</button>

        @if (Route::has('password.request'))
          <p class="forgot-link">
            <a href="{{ route('password.request') }}">Lupa password?</a>
          </p>
        @endif

      </form>
    </div>
  </div>

</x-guest-layout>