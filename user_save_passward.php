<?php
include('page_header.php');
require_once('db_inc.php');
$upass1=$_POST['upass1'];
$upass2=$_POST['upass2'];
$uid=$_POST['uid'];
if($upass1==$upass2){
$sql='UPDATE tb_user set upass="'.$upass1.'"Where uid="'.$uid.'"';
$rs=mysql_query($sql,$conn);
echo "<h2>パスワード変更しました。</h2>";
}else{
echo "<h2>パスワードが一致しません。パスワード変更できません。</h2>";
}
//$sql='UPDATE tb_user set upass="'.$upass.'"Where uid="admin"';
//$sql='UPDATE tb_user set upass="'.$upass.'"Where uid="'.$uid.'"';
//$rs=mysql_query($sql,$conn);

include('page_footer.php');
?>