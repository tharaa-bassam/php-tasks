<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task6</title>
</head>
<body>
    <?php
      $text="info@orange.com";
      $file= substr(strrchr($text , "i") , -3);
      echo $file;
    ?>
</body>
</html>