<?php

include('page_header.php');

require_once('db_inc.php');  //データベース接続

echo '<br>'.'</br>';
echo '<br>'."パスワード：<input type=\"password\" name=\"pass\" >".'</br>';
echo "<input type=\"submit\" value=送信>";
echo "<input type=\"reset\" value=取消>";
?>
<form action="user_passwd_result.php" method="post">;
<?php
if(action==true){
	$sql ="INSERT INTO tb_user VALUES('$u', '$n', '$p', '$r')";
	include_once('db_inc.php'); //データベース接続のプログラムを読み込む
	$rs = mysql_query($sql, $conn);//SQL文をサーバーに送信し実行
	echo "変更しました";
}

 include('page_footer.php');
 ?>
