<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 4</title>
</head>
<body>
  <?php

$path="www.orange.com/index.php" ;
$file= substr(strrchr($path , "/") , 1);
echo $file ; 

?>
</body>
</html>