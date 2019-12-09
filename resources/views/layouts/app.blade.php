<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--スタイルシートの適用-->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!--viewportの設定-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

    @yield('title')
    
  </head>
  <body>

    <!--ヘッダー-->
    <header>
        <ul>
            <li><a class="logo">Anyshare</a></li>
            <li><a href="/menu">メニュー</a></li>
            <li><a href="/basic">基本情報編集</a></li>
            <li><a href="/item">表示項目設定</a></li>
            <li><a href="/design">デザイン設定</a></li>
            <li><a href="/top">TOPページ編集</a></li>
            <li><a href="/category/list">カテゴリ編集</a></li>
            <li><a href="/post/list">投稿内容編集</a></li>
            <li><a href="{{ route('logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>

        </ul>
    </header>

    @yield('content')

    <!--フッター-->
    <footer>
        <ul>
            <li class="policy"><a href="#">プライバシーポリシー</a></li>
            <li>|</li>
            <li><a href="#" class="rule">利用規約</a></li>
        </ul>
            <div class="copyright">
                <a>Copyright © 2019 EqualShare All Rights Reserved.</a>
            </div>
    </footer>
  </body>
</html>