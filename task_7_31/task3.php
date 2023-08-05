<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task3</title>
</head>
<body>
    <?php
      $word='Orange';
      $str= 'I am a full stack developer at orange coding academy';
      if(strpos($str , $word) == true)  {
        echo "word found";
      }
      else {
        echo "word not found";
      }
    ?>
</body>
</html>