<?php 
session_start();
if(!empty($_POST)) {
  //ログイン処理
  if($_POST['user_name'] != '' &&
     $_POST['pass_word'] != ''){
    ////セッションに値を入れる
    $_SESSION['flag'] = "フラグ"; 
    //別URLに飛ばす(セッションは保持される)
    header('Location: a.php');
    exit();
  }
}
//セッションに値が入っている(ログインしている)
//ならばb.phpに飛ばす
if( !empty($_SESSION['flag'])){
  header('Location: b.php');
}else {
  echo "SESSION無し";
}
?>
<h1>index.php</h1>
<!-- action="/"にて自身にデータをPOSTする ↑のPHPで受け取る　-->
<form action="/" method="POST">
  <input type="text" name="user_name" placeholder="user_name">
  <input type="text" name="pass_word" placeholder="pass_word">
  <input type="submit" value="送信">
</form>