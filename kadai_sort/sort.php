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
         
         function sort_2way($array, $order) {
          if($order){
            echo "<p>昇順にソートします</p>";
            sort($array);
            foreach($array as $value){
             echo $value . "<br>";
            }
          }
          else {
            echo "<p>降順にソートします</p>";
            rsort($array);
            foreach($array as $value){
             echo $value . "<br>";
            }
          }
         }

         sort_2way($nums, TRUE);
         sort_2way($nums, FALSE);
         ?>
     </p>
 </body>
 
 </html>