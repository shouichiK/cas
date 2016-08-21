<?php

include('page_header.php');//画面出力開始
require_once('db_inc.php');

if ( isset($_SESSION['urole']) and $_SESSION['urole']==1 ) {
 //学生としてログインしているなら
  $uid   = $_SESSION['uid'];   // 認証済みのユーザID
  $uname = $_SESSION['uname']; // 認証済みのユーザ名
  echo '<h2>コース希望登録</h2>';
  echo $uname . '(' . $uid . ')';   // ログイン中のユーザ氏名とIDを表示
}else { // その以外は
  die('エラー：この機能を利用する権限がありません');
}
$courses = array(
  1=>'情報技術応用コース',
  2=>'情報科学総合コース'
);
//変数の初期化
$cid = 1;         //希望のコースID;
$act = 'insert';  //初回登録?（insert: 初回登録; update: 再登録）;

// ログイン中のユーザ($uid)の希望状況を検索する
$sql ="SELECT * FROM tb_entry WHERE uid='$uid'" ;//=================
$rs = mysql_query($sql, $conn);


$sql1 = "select * from tb_entry where uid='$uid' not in(select uid from tb_decide)";
$rs1 = mysql_query($sql1, $conn);
if (!$rs) {
  die ('エラー: ' . mysql_error());
}
$row = mysql_fetch_array($rs) ;
$row1 = mysql_fetch_array($rs1) ;
if ($row) {
  $cid = $row['cid']; // 現在登録しているコースのID
  $act = 'update';    // すでに登録したため「再登録」とする
}
echo '<form action="cs_wish_save.php" method="post">';
echo '<input type="hidden" name="act" value="'.  $act .'">'; //非表示送信
if($row1){
		echo "すでにコースが決定しているため希望提出できません";
	}else{
	foreach ($courses as $id => $name ){
		if ($id == $cid){  //登録状況を反映したラジオボタンを作成
    		echo '<input name="cid" type="radio" value="'.  $id .'"checked>'.$name;//=============
  		}else{
    		echo '<input name="cid" type="radio" value="'.  $id .'">'.$name;//=============
  		}
	}
	echo'<br>';
echo'<br>';
echo "研究分野、自己アピール文";
echo'<br>';
echo'<textarea name="text"  rows="4" cols="40"></textarea>';
echo'<br>';
echo '<input type="submit" value="送信"/>';
echo '</form>';

}


include('page_footer.php');//画面出力終了
?>