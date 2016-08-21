<?php include('page_header.php');
echo' <form action="check.php" method="post">';
echo'<table>';
echo'<tr><td>ユーザ名：</td><td><input type="text" name="uid"></td></tr>';
echo'<tr><td>パスワード：</td><td><input type="password" name="pass"></td></tr>';
echo'</table>';
echo'<input type="submit" value="送信"><input type="reset" value="取消">';
echo'</form>';

include('page_footer.php'); ?>