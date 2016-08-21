<?php


 session_start();
include('index.html');
 unset($_SESSION);

 session_destroy();

    //ページヘッドを出力
 echo '<h1>ログアウトしました！</h1>';
 echo '<h2><a href="index.php">トップページ</a><h2></body>';
 include('page_footer.php');    //ページフッタを出力
?>