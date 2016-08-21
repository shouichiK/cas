<?php
include('page_header.php');  //画面出力開始
require_once('db_inc.php');

echo "<h2>希望状況集計一覧</h2>";

$sql = "SELECT cname, COUNT( * ) AS 人数
FROM tb_entry
NATURAL JOIN tb_course
GROUP BY tb_course.cid
UNION
SELECT cname, 0
FROM tb_course
WHERE cid NOT
IN (

SELECT cid
FROM tb_entry
)";


//検索条件を適用したSQL文を作成
$rs = mysql_query($sql, $conn);
if (!$rs) die ('エラー: ' . mysql_error());

$row = mysql_fetch_array($rs) ;
echo '<table border=1>';
echo '<tr><th>コース</th><th>人数</th></tr>';
while ($row) {
 echo '<tr>';
 echo '<td>' . $row['cname'] . '</td>';
 echo '<td>' . $row['人数']. '</td>';
 echo '</tr>';
 $row = mysql_fetch_array($rs) ;
}
echo '</table>';

include('page_footer.php');  //画面出力終了
?>
