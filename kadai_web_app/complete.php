<?php
  session_start();

  $name = isset($_SESSION['name']) ? $_SESSION['name'] : '名無し';
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>社員情報入力フォーム</title>
  </head>
  <body>
    <h1>登録が完了しました。</h1>
    <p><?php echo $name;?>さんの情報がデータベースに保存されました。</p>
    <button id="back" onclick="location.href='form.php';">戻る</button>

    <?php
      $_SESSION = array();
      session_destroy();
    ?>
  </body>
</html>