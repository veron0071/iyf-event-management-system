<x-guest-layout>
  <style>
    body { background: #FAF7F0; }
    .register-wrap {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 16px;
      font-family: 'DM Sans', sans-serif;
    }
    .register-card {
      background: #fff;
      border: 1px solid #E4DDD0;
      border-radius: 20px;
      padding: 40px;
      width: 100%;
      max-width: 420px;
    }
    .register-eyebrow {
      font-size: 10px;
      font-weight: 500;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: #4A8C62;
      margin-bottom: 6px;
    }
    .register-title {
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
    .field input {
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
      margin-top: 8px;
    }
    .btn-submit:hover { background: #2D5C40; }
    .login-link {
      display: block;
      text-align: center;
      margin-top: 16px;
      font-size: 13px;
      color: #888;
      text-decoration: none;
    }
    .login-link a { color: #2D5C40; font-weight: 500; text-decoration: none; }
    .login-link a:hover { text-decoration: underline; }
  </style>

  <div class="register-wrap">
    <div class="register-card">

      <div class="register-eyebrow">International Yoga Festival 2026</div>
      <div class="register-title">Buat Akun Admin</div>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="field">
          <label for="name">Nama</label>
          <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
          @error('name')<div class="field-error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
          <label for="email">Email</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
          @error('email')<div class="field-error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
          <label for="password">Password</label>
          <input id="password" type="password" name="password" required autocomplete="new-password" />
          @error('password')<div class="field-error">{{ $message }}</div>@enderror
        </div>

        <div class="field">
          <label for="password_confirmation">Konfirmasi Password</label>
          <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
          @error('password_confirmation')<div class="field-error">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn-submit">Daftar →</button>

        <p class="login-link">
          Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
        </p>

      </form>
    </div>
  </div>

</x-guest-layout>