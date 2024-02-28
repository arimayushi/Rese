@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<!-- //* 検索機能ここから *// -->
<div>
  <form action="{{ route('posts.index') }}" method="GET">
    <input type="text" name="user" value="{{ $user }}">
    <input type="submit" value="Search ...">
  </form>
</div>
<!-- //*検索機能ここまで*// -->

<h1>
  <span>My Shop List</span>
  <a href="{{ route('posts.create') }}">[Add]</a>
</h1>

<table>
  <tr>
    <th>All area</th><th>All genre</th>
  </tr>

<!-- //* 保存されているレコードを一覧表示　*// -->
  @forelse ($posts as $post)
    <tr>
      <td><a href="{{ route('posts.show' , $post) }}">{{ $post->area }}</td></a>
      <td>{{ $post->genre }}</td>
    </tr>
  @empty
    <td>No posts!!</td>
  @endforelse
</table>

<div class="contents">
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg') }}" alt="">
      <p>仙人</p>
      <p>#東京都 #寿司</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg') }}" alt="">
      <p>牛助</p>
      <p>#大阪府 #焼肉</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg') }}" alt="">
      <p>戦慄</p>
      <p>#福岡県 #居酒屋</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg') }}" alt="">
      <p>ルーク</p>
      <p>#東京都 #イタリアン</p>
      <p>詳しく見る</p>
   </div>
</div>
<div class="contents">
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg') }}" alt="">
      <p>志摩屋</p>
      <p>#福岡県 #ラーメン</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg') }}" alt="">
      <p>香</p>
      <p>#東京都 #焼肉</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg') }}" alt="">
      <p>JJ</p>
      <p>#大阪府 #イタリアン</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg') }}" alt="">
      <p>らーめん極み</p>
      <p>#東京都 #ラーメン</p>
      <p>詳しく見る</p>
   </div>
</div>
<div class="contents">
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg') }}" alt="">
      <p>烏雨</p>
      <p>#大阪府 #居酒屋</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg') }}" alt="">
      <p>築地色合</p>
      <p>#東京都 #寿司</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg') }}" alt="">
      <p>晴海</p>
      <p>#大阪府 #焼肉</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg') }}" alt="">
      <p>三子</p>
      <p>#福岡県 #焼肉</p>
      <p>詳しく見る</p>
   </div>
</div>
<div class="contents">
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg') }}" alt="">
      <p>八戒</p>
      <p>#東京都 #居酒屋</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg') }}" alt="">
      <p>福助</p>
      <p>#大阪府 #寿司</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg') }}" alt="">
      <p>ラー北</p>
      <p>#東京都 #ラーメン</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg') }}" alt="">
      <p>翔</p>
      <p>#東京都 #寿司</p>
      <p>詳しく見る</p>
   </div>
</div>
<div class="contents">
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg') }}" alt="">
      <p>経緯</p>
      <p>#大阪府 #居酒屋</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg') }}" alt="">
      <p>漆</p>
      <p>#東京都 #焼肉</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg') }}" alt="">
      <p>THE TOOL</p>
      <p>#福岡県 #イタリアン</p>
      <p>詳しく見る</p>
   </div>
   <div class="item">
      <img src="{{ url('https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg') }}" alt="">
      <p>木船</p>
      <p>#大阪府 #寿司</p>
      <p>詳しく見る</p>
   </div>
</div>
@endsection
</body>
</html>