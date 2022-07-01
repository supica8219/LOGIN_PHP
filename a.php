<?php 
session_start();
// セッションに何か入っているならログインできてるという認識
if( !empty($_SESSION['flag'])){
  echo "セッションを登録しました";
}else {
  echo "セッション登録失敗";
}
?>
<h1>所持金額ページです a.php</h1>
<a href="index.php">index.phpに戻る</a>