<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8">
    <title>4eachblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>

<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");

?>


   <div class="logo">
      <img src="4eachblog_logo.jpg">
   </div>
 <header>
         <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
</header>

<h1>プログラミングに役立つ掲示板</h1>

 
 <br>
<div class="left">
 
      <form method="post" action="insert.php">
      <h2>入力フォーム</h2> 
            <div>
                <label>ハンドルネーム</label>
                 <br>
                <input type="text" class="text" name="handlename" size="35">
            </div>
            <div>   
                <label>タイトル</label>
                <br>
                <textarea cols="35" name="title"></textarea>
            </div>
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
            </div>

            <div>
                <input type="submit" class="submit" value="投稿する">
            </div>
      </form>

   <div class="phppart">
   
   <?php  
   
   while ($row = $stmt->fetch()) {
      
      echo "<div class='kiji'>";
         echo "<h3>".$row['title']."</h3>";
         echo "<div class='contents'>";
         echo $row['comments'];
         echo "<div class='handlename'>posted by".$row['handlename']."</div>";
         echo "</div>";
      echo "</div>";
   }
   ?>
   
   </div>

</div>
<div class="right">
<h4>
      <div class="titles">人気の記事 </div>  
         <ul>
            <li>PHPオススメ</li>
            <li>PHP Myadminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
         </ul>        
</h4>

<h4>
      <div class="titles">おすすめリンク</div> 
      <ul>
         <li>インターノウス株式会社</li>
         <li>XAMPPのダウンロード</li>
         <li>Eclipseのダウンロード</li>
         <li>Bracketsのダウンロード</li>
      </ul>
      
</h4>

<h4>
      <div class="titles">カテゴリ</div>
           
      <ul>
         <li>HTML</li>
         <li>PHP</li>
         <li>MySQL</li>
         <li>JavaScript</li>
      </ul>
      
</h4>
</div>

    
    <!----- footer ----->
 <footer>
   copyright © internous| 4each blog the which provides A to Z about programming.

 </footer>
 <!----- /footer ----->
 </body>
</html>

