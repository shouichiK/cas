<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');

echo "<h2>未提出者一覧</h2>";
$sql = "SELECT x.uid, uname
FROM tb_user x
WHERE urole =1
AND x.uid NOT
IN (

SELECT y.uid
FROM tb_entry y
)";

//検索条件を適用したSQL文を作成
$rs = mysql_query($sql, $conn);
if (!$rs) die ('エラー: ' . mysql_error());

$row = mysql_fetch_array($rs) ;
echo '<table border=1>';
echo '<tr><th>ユーザID</th><th>氏名</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['uid'] . '</td>';
 echo '<td>' . $row['uname']. '</td>';
 echo '</tr>';
 $row = mysql_fetch_array($rs) ;
}
echo '</table>';

include('page_footer.php');  //画面出力終了
?>





