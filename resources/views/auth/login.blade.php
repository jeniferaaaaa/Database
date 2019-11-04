<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--スタイルシートの適用-->
    <link rel="stylesheet" href="css/login.css">
    <!--レスポンシブ対応スタイルシートの適用-->
    <link rel="stylesheet" href="css/login_responsive.css">
    <!--viewportの設定-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

    <!--タイトル-->
    <title>基本情報編集｜Anyshare</title>
  </head>
  <body>

    <!--ログイン画面の枠-->
    <div class="login">
            
    <!--入力欄-->
    <div class="input">
        <form method="POST" action="{{ route('login') }}">{{ csrf_field() }}
            <p>メールアドレス</p><br />
            <input type="email" name="email"><br />
            <p>パスワード</p><br />
            <input type="password" name="password"><br />
            <div class="button">
                <button type="submit">ログイン</button>
            </div>
            <a href="/reset_pass">パスワードをお忘れですか？</a>
        </form>
    </div>
    </div>
        
  </body>
</html>