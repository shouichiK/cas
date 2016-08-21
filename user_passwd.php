<?php
include('page_header.php');
require_once('db_inc.php');?>
<h2>パスワード変更</h2>
<h2>管理者</h2>
<!--
<tr><td>ユーザーID：</td><td><input type="" name="upass2"></td></tr>
-->
<?php
$uid=$_GET['uid'];
?>
<form action="user_save_passward.php" method="post">
<input type="hidden" name="uid" value="<?php echo $uid; ?>"/>
<table>
<tr><td>新しいパスワード：</td><td><input type="password" name="upass1"></td></tr>
<tr><td>確認入力：</td><td><input type="password" name="upass2"></td></tr>
</table>
<input type="submit" name="a" value="パスワード変更">
<input type="submit" name="a" value="キャンセル">
</form>
<?php
 include('page_footer.php');
?>

















































