<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task9</title>
</head>
<body>
   <?php
   $array1=array("color"=>"red",2,4);
   $array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);
   echo '<pre>' ;
   print_r(array_merge($array1,$array2));
   echo '</pre>';
   ?>
</body>
</html>