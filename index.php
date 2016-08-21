<?php
 include('page_header.php');
  //ページヘッドを出力
 if (isset($_SESSION['uid'])){
   $uname=$_SESSION['uname'];

 	echo '<h2>','ようこそ'.$uname.'さん'.'</h2>';

 }else{
   echo '<h2>このページは、ログインしないと利用できません！</h2>';

 }
 include('page_footer.php');    //ページフッタを出力
?>