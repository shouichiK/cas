
<?php

$menu0 = array(  //共通メニュー:未ログイン
 'ログイン'  => 'login.php',
);
$menu1 = array(  //学生メニュー
 '成績確認'  => 'cs_grade.php'  ,
 '希望提出'  => 'cs_wish.php' ,
 '結果確認'  => 'cs_result.php' ,
);
$menu2 = array(  //教員メニュー
 '希望一覧'  => 'cs_list.php' ,
 '未提出者'  => 'cs_noentry.php' ,
 '希望集計'  => 'cs_summary.php' ,
 'コース決定'=> 'cs_decide.php'
);
$menu3 = array(  //管理者メニュー
 'アカウント登録'  => 'user_add.php' ,
 'アカウント一覧'  => 'user_list.php' ,
);
$menu4 = array(  //共通メニュー:ログイン中
 'ホーム'  => 'index.php',
 'ログアウト'  => 'logout.php',
);
echo '<div id="menu">';
echo'<ul>';
 // ここはセッションがすでに開始したと仮定する。
if (isset($_SESSION['urole'])){//ログイン中の場合
  $urole = $_SESSION['urole']; //ユーザ種別を調べる
  //これから$uroleの値を調べ、値に応じて異なるメニューを出力

  if($urole==1){
  	foreach($menu1 as $label=>$url){ //$menuの要素を調べまわす
    	if($label=='成績確認'){
    		echo '<li><h3><a href="'.$url.'"> '.$label.'</a></h3></li>';
   		}else{
   			echo" | ";
   			echo '<li><h3><a href="'.$url.'">  '.$label.'</a></h3></li>';
   		}
   	}
   	foreach($menu4 as $label=>$url){
   		echo" | ";
   		echo '<li><h3><a href="'.$url.'">  '.$label.'</a></h3></li>';
   	}
  }else if($urole==2){
  	foreach($menu2 as $label=>$url){ //$menuの要素を調べまわす
  		if($label=='希望一覧'){
    		echo '<li><h3><a href="'.$url.'"> '.$label.'</a></h3></li>';
   		}else{
   			echo" | ";
   			echo '<li><h3><a href="'.$url.'">  '.$label.'</a></h3></li>';
   		}
   	}
   	foreach($menu4 as $label=>$url){

   		echo '<li><h3><a href="'.$url.'">  '.$label.'</a></h3></li>';
   	}
  }else if($urole==9){
  	foreach($menu3 as $label=>$url){ //$menuの要素を調べまわす
  		if($label=='アカウント登録'){
    		echo '<li><h3><a href="'.$url.'"> '.$label.'</a></h3></li>';
   		}else{
   			echo" | ";
   			echo '<li><h3><a href="'.$url.'">  '.$label.'</a></h3></li>';
   		}
   	}
   	foreach($menu4 as $label=>$url){
   		echo" | ";
   		echo '<li><h3><a href="'.$url.'">  '.$label.'</a></h3></li>';
   	}
  }

 }else{//未ログインの場合
 foreach($menu0 as $label=>$url){ //$menuの要素を調べまわす
    	echo '<li><h3><a href="'.$url.'"> '.$label.'</a></h3></li>';
   	}
 }


 echo '</ul>';
  echo' </div>';

?>