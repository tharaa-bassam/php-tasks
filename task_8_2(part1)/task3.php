<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
      function sum($num1 , $num2) {
        if ($num1 == $num2) {
          echo ( $num1 + $num2 ) * 3 ;
      
        }
        else {
          echo "its different numbers";
        }
      }
      
      sum(5 , 1);
  ?>
</body>
</html>