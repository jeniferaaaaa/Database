<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <!--スタイルシートの適用-->
    <link rel="stylesheet" href="css/top.css">
    <!--レスポンシブ対応スタイルシートの適用-->
    <link rel="stylesheet" href="css/top_responsive.css">
    <!--viewportの設定-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">

    <!--タイトル-->
    <title>TOP|matomar</title>
  </head>
  <body>

    <!--ヘッダー-->
    <header>
        <ul>
            <li><img src="images/make/top-logo.png"></li>
            <li><a href="#">機能紹介</a></li>
            <li><a href="#">料金</a></li>
            <li><a href="#">事例</a></li>
            <li><a href="#scroll" class="you-btn">あなたもまとめてみる？</a></li>
        </ul>
    </header>

    <!--ハート部分-->
    <div class="heart-part">
      <img src="images/make/heart_top.jpg">
    </div>

    <!--おまとめ一覧部分-->
    <div class="omatome">
        <h1>今投稿されているおまとめ一覧</h1>
          <table>
            <tr>
              <td><a href="#"><img src="images/make/icecream.png" class="image1"></a></td>
              <td><a href="#"><img src="images/make/chameleon.png" class="image2"></a></td>
              <td><a href="#"><img src="images/make/katsudon.png" class="image3"></a></td>
            </tr> 
            <tr>
              <td><a href="#">夏にぴったりなアイス一覧</a></td>
              <td><a href="#">かわいい爬虫類たち</a></td>
              <td><a href="#">夏にもってこいのスタミナ丼</a></td>
            </tr>  
            <tr>
              <td><a href="#"><img src="images/make/samoyed.png" class="image4"></a></td>
              <td><a href="#"><img src="images/make/hamster.png" class="image5"></a></td>
              <td><a href="#"><img src="images/make/kakigoori.png" class="image6"></a></td>
            </tr>
            <tr>
              <td><a href="#">かわいくてモフモフなわんこたち</a></td>
              <td><a href="#">あなたの運命のハムスターは？</a></td>
              <td><a href="#">フルーツたっぷりかき氷</a></td>
            </tr>
            <tr>
              <td><a href="#"><img src="images/make/mendako.png" class="image7"></a></td>
              <td><a href="#"><img src="images/make/speed.png" class="image7"></a></td>
              <td><a href="#"><img src="images/make/movie.png" class="image7"></a></td>
            </tr>
            <tr>
              <td><a href="#">不思議！深海生物たち！</a></td>
              <td><a href="#">いよいよオリンピック！おすすめ競技一覧</a></td>
              <td><a href="#">2019年おすすめ映画</a></td>
            </tr>
          </table>
          
        <!--ページャー-->
        <div class="pagination">
          <ul class="pager">
            <li class="prev"><a href="#">&laquo; PREV</a></li>
            <li><em>1</em></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li class="next"><a href="#">NEXT &raquo;</a></li>
          </ul>
        </div>

        <!--紹介部分-->
        <div class="omatome-ad">
            <h1>あなたの好きなもののおまとめサイトを作ってみませんか？</h1>
            <h2>自分の「好き」をみんなでシェアしましょう！</h2>
            <!--紹介ボタン部分-->
            <div class="omatome-button">
            <a href="/form" id="scroll" class="intro-button">今すぐ無料で自分のおまとめサイトを作ってみる</a>
            </div>
        </div>
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
