<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $nums = [15, 4, 18, 23, 10];

         echo "<p>昇順にソートします</p>";
         sort($nums);
         foreach($nums as $value){
          echo $value . "<br>";
         }

         echo "<p>降順にソートします</p>";
         rsort($nums);
         foreach($nums as $value){
          echo $value . "<br>";
         }
         
         ?>
     </p>
 </body>
 
 </html>