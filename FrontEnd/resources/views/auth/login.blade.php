@extends('layouts.app')
@section('title', 'Login')
@section('body-class', 'login-body')

@section('body')
<main class="login-wrap">
  <form class="login-card" method="POST" action="{{ route('login.store') }}" autocomplete="off" novalidate>
    @csrf
    <div class="login-logo"><x-icon name="book" :size="24" /></div>
    <h1>LOGIN {{ config('app.name') }}</h1>

    @if ($errors->any())
      <div class="alert" role="alert">{{ $errors->first() }}</div>
    @endif

    <label for="username">Username</label>
    <input class="input" type="text" id="username" name="username" value="{{ old('username') }}" autofocus required>

    <label for="password">Kata Sandi</label>
    <div class="pw">
      <input class="input" type="password" id="password" name="password" required>
      <button type="button" class="pw-toggle" id="pwToggle" aria-label="Tampilkan kata sandi">
        <span data-eye><x-icon name="eye" /></span>
        <span data-eye-off hidden><x-icon name="eye-off" /></span>
      </button>
    </div>

    <div class="login-row">
      <label class="check"><input type="checkbox" name="remember" value="1" checked><span class="box"></span>Ingat saya</label>
      <a href="#" data-soon>Lupa Kata Sandi?</a>
    </div>

    <button class="btn-primary block" type="submit">Masuk <x-icon name="arrow-right" /></button>

    <p class="login-help">Butuh bantuan login? <a href="#" data-soon>Hubungi Admin Sekolah</a></p>
  </form>
</main>
<footer class="login-foot">
  <span>&copy; {{ date('Y') }} {{ config('app.name') }}</span>
  <nav><a href="#" data-soon>Kebijakan Privasi</a><a href="#" data-soon>Syarat &amp; Ketentuan</a><a href="#" data-soon>Bantuan</a></nav>
</footer>
@endsection
