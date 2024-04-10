<?php
  session_start();

  $name = $_POST['employee_name'];
  $age = $_POST['employee_age'];
  $department = $_POST['department'];

  $errors = [];

  if(empty($name)){
    $errors[] = '社員名を入力してください。';
  }
  if(empty($age)){
    $errors[] = '年齢を入力してください。';
  }
  elseif(!is_numeric($age)){
    $errors[] = '年齢は数字で入力してください。';
  }

  if(empty($errors)) {
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;
    $_SESSION['department'] = $department;

    setcookie('name', $name, 3600);
    setcookie('age', $age, 3600);
  }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>社員情報入力フォーム</title>
  </head>
  <body>
    <h1>入力内容をご確認ください。</h1>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

    <table>
      <tr>
        <th>項目</th>
        <th>入力内容</th>
      </tr>
      <tr>
        <td>社員名</td>
        <td><?php echo $name;?></td>
      </tr>
      <tr>
        <td>年齢</td>
        <td><?php echo $age;?></td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td><?php echo $department;?></td>
      </tr>
    </table>

    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>

    <?php
      if(!empty($errors)){
        foreach($errors as $error){
          echo '<br>';
          echo '<font color="red">' .$error .'</font>' .'<br>';
        }
        echo '<script>document.getElementById("confirm-btn").disabled = true;</script>';
      }
    ?>
  </body>
</html>