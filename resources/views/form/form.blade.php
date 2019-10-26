<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--スタイルシートの適用-->
    <link rel="stylesheet" href="css/sign_up.css">
    <!--レスポンシブ対応スタイルシートの適用-->
    <link rel="stylesheet" href="css/sign_up_responsive.css">
    <!--viewportの設定-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

    <!--タイトル-->
    <title>サイト新規登録｜Anyshare</title>
  </head>
  <body>
    
    <!--ヘッダー-->
    <header>
        <ul>
            <li><a class="logo">Anyshare</a></li>
            <li><a href="#">機能紹介</a></li>
            <li><a href="#">料金</a></li>
            <li><a href="#">事例</a></li>
            <a href="/form" class="register">新規登録</a>
        </ul>
    </header>

    <!--サイト新規登録欄-->
    <div class="sign-up">
      <h2>サイト新規登録</h2><br />
      <h3>まずはあなたとサイトの基本情報を登録してください。</h3><br />
         
        <!--入力欄-->
        <div class="input">
          <form method="POST" action="{{ url('form/confirm') }}">{{ csrf_field() }}
            <p class=hissu>※<span>必須</span>は必須入力項目です。</p>
            <table>
              <tr>
                <td>
                  <span>必須</span>ニックネーム<br /><br />
                  @if ($errors->has('name'))
                  <div class="error_name">※{{ $errors->first('name') }}</div>
                  @endif
                </td>
                <td><input type="text" name="name"></td>
              </tr>
             <tr>
                <td>
                  <span>必須</span>メールアドレス<br /><br />
                  @if ($errors->has('email'))
                  <div class="error_email">※{{ $errors->first('email') }}</div>
                  @endif
                </td>
                <td>
                  <input type="email" name="email">
                  <p>※ご登録いただいたメールアドレスにアカウント情報をお送りいたします。</p>
                </td>
             </tr>
              <tr>
                <td>
                  <span>必須</span>パスワード<br /><br />
                  @if ($errors->has('password'))
                  <div class="error_pass1">※ {{ $errors->first('password') }}</div>
                  @endif
                </td>
                <td><input type="password" name="password"></td>
             </tr>
              <tr>
                <td>
                  <span>必須</span>パスワード（確認）<br /><br />
                  @if ($errors->has('password_confimation'))
                  <div class="error_pass2">※{{ $errors->first('password_confimation') }}</div>
                  @endif
                </td>
                <td>
                  <input type="password" name="password_confimation"><br /><br />  
                </td>
              </tr>
              <tr>
                <td>
                  <span>必須</span>サイト名称<br /><br />
                  @if ($errors->has('site_name'))
                  <div class="error_site_name">※{{ $errors->first('site_name') }}</div>
                  @endif
                </td>
                <td><input type="text" name="site_name"></td>
              </tr>
              <tr>
                <td>
                  <span>必須</span>サイト利用目的<br /><br />
                  @if ($errors->has('site_purpose'))
                  <div class="error_site_purpose">※{{ $errors->first('site_purpose') }}</div>
                  @endif
                </td>
                <td><textarea name="site_purpose" cols="40" rows="5" wrap="hard"></textarea></td>
              </tr>
              <tr>
                <td>
                  <span>必須</span>ドメイン<br /><br />
                  @if ($errors->has('domain'))
                  <div class="error_domain">※{{ $errors->first('domain') }}</div>
                  @endif
                </td>
                <td><input type="text" name="domain"></td>
              </tr>
            </table>
            <!--確認・戻るボタン-->
            <div class="button">  
              <a class="back" href="javascript:history.back();">戻る</a>
              <button type="submit" class="confirm">確認画面へ進む</button>
            </div>
          </form>
        </div>
    </div>

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
 