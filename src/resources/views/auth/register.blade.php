@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
<div class="Rese__content">
  <div class="Rese__heading">
    <h2>Registration</h2>
  </div>
  <form class="form" action="/register" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" />
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="Password" />
        </div>
        <div class="form__input--text">
          <input type="password" name="password_confirmation" placeholder="Password" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">登録</button>
    </div>
  </form>
  <div class="login__link">
    <p>アカウントをお持ちの方はこちらから</p>
    <a class="login" href="/login">ログイン</a>
  </div>
</div>
<footer class="footer">
  <div class="footer__inner">
    <small>Rese,inc.</small>
  </div>
</footer>
@endsection
</body>
</html>