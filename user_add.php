<?php
include('page_header.php'); ?>
<form action="user_add_result.php" method="post">
<?php
require_once('db_inc.php');  //データベース接続
echo "<h2>新規アカウント登録</h2>";



//echo '<tr><th>ユーザID</th><th>氏名</th><th>種別</th><th colspan="2">操作</th>';


echo '<br>'."ユーザーID： <input type=\"text\" name=\"userid\"size=\"25\" >";
echo '<br>'."氏名：<input type=\"text\" name=\"username\" size=\"34\">";
echo '<br>'."パスワード：<input type=\"password\" name=\"pass\" size=\"28\">";
echo '<br>'."パスワード確認用： <input type=\"password\" name=\"pass1\" size=\"20\">";
echo '<br>'."職業(1=学生　2=教師　9=管理者)：<input type=\"text\" name=\"userrole\" size=\"1\">";
echo '<br>'."<input type=\"submit\" value=送信>";
echo "<input type=\"reset\" value=取消>";

?>
