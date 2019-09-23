<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--スタイルシートの適用-->
    <link rel="stylesheet" href="/css/sign_up_confirm.css">
    <!--レスポンシブ対応スタイルシートの適用-->
    <link rel="stylesheet" href="/css/sign_up_confirm_responsive.css">
    <!--viewportの設定-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

    <!--タイトル-->
    <title>サイト新規登録確認｜matomar</title>
  </head>
  <body>
    
    <!--ヘッダー-->
    <header>
      <ul>
          <li><img src="/images/make/top-logo.png"></li>
          <li><a href="#">機能紹介</a></li>
          <li><a href="#">料金</a></li>
          <li><a href="#">事例</a></li>
      </ul>
    </header>

    <!--サイト新規登録欄-->
    <div class="sign-up-confirm">
      <h2>登録内容確認</h2><br />
         
        <!--入力欄-->
        <form method="POST" action="{{ url('form/confirm/done') }}">{{ csrf_field() }}
          <div class="input-confirm"> 
            <table>
              <tr>
                <td><span>必須</span>ニックネーム<br /><br /></td>
                <td><p class="name">{{ $data['name'] }}</p></td>
              </tr>
             <tr>
                <td><span>必須</span>メールアドレス<br /><br /></td>
                <td><p class="email">{{ $data['email'] }}</p></td>
             </tr>
              <tr>
                <td><span>必須</span>サイト名称<br /><br /></td>
                <td><p class="site_name">{{ $data['site_name'] }}</td>
              </tr>
              <tr>
                <td><span>必須</span>サイト利用目的<br /><br /></td>
                <td><p class="site_purpose">{{ $data['site_purpose'] }}</p></td>
              </tr>
              <tr>
                <td><span>必須</span>ドメイン<br /><br /></td>
                <td><p class="domain">{{ $data['domain'] }}</p></td>
              </tr>
            </table>          
          </div>

          <h3>この内容でよろしいでしょうか？</h3>
          <!--確認・戻るボタン-->
          <div class="button">  
            <a class="back" href="javascript:history.back();">編集画面に戻る</a>
            <button type="submit" class="ok" >ＯＫ</button>
          </div>
        </form>
    </div>

    <!--フッター-->
    <footer>
      <ul>
          <li><a href="#">プライバシーポリシー</a></li>
          <li>|</li>
          <li><a href="#" class="rule">利用規約</a></li>
      </ul>
      <div class="copyright">
          <a>Copyright © 2019 EqualShare All Rights Reserved.</a>
     </div>
   </footer>
    
  </body>
</html>