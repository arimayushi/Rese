@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
@endsection

@section('content')
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/thanks">
        Rese
      </a>
    </div>
  </header>

  <main>
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>会員登録ありがとうございます</h2>
      </div>
    </div>
      <div class="login__link">
      <a class="login" href="/login">ログイン</a>
    </div>
  </main>
</body>
@endsection
</html>