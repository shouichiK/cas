<?php
include('page_header.php');

$u = $_POST['userid'] ;
$n = $_POST['username'] ;
$p = $_POST['pass'] ;
$p1=$_POST['pass1'] ;
$r = $_POST['userrole'] ;


if($p==$p1){
	if($r==1||$r==2||$r==9){
		echo '<h2>アカウントの登録が終わりました</h2>';
		$sql ="INSERT INTO tb_user VALUES('$u', '$n', '$p', '$r')";

		include_once('db_inc.php'); //データベース接続のプログラムを読み込む

		$rs = mysql_query($sql, $conn);//SQL文をサーバーに送信し実行
	}else{
		echo '<h2>アカウントの登録失敗！</h2>';
   	 	echo '<a href="index.php">戻る</a>';
	}
}else{
	echo '<h2>アカウントの登録失敗！</h2>';
	echo '<h2>パスワードが一致しません</h2>';
   	echo '<a href="index.php">戻る</a>';
}





 include('page_footer.php');
