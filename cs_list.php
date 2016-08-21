<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');

echo "<h2>コース希望一覧</h2>";
$sql = "SELECT * FROM tb_entry NATURAL JOIN tb_user NATURAL JOIN tb_course";
//検索条件を適用したSQL文を作成
$rs = mysql_query($sql, $conn);
if (!$rs) die ('エラー: ' . mysql_error());

$row = mysql_fetch_array($rs) ;
echo '<table border=1>';
echo '<tr><th>ユーザID</th><th>氏名</th><th>希望コース</th><th>研究分野、自己アピール</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['uid'] . '</td>';
 echo '<td>' . $row['uname']. '</td>';
 echo '<td>' . $row['cname']. '</td>';
 echo '<td>' . $row['note']. '</td>';


 echo '</tr>';
 $row = mysql_fetch_array($rs) ;
}
echo '</table>';

include('page_footer.php');  //画面出力終了
?>