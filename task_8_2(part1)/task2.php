<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php
      function tempreure($temp) {
        if ($temp < 20) {
          echo "its winter time  ";
      
        }
        else {
          echo "its summertime ";
        }
      }
      
      tempreure(80)
  ?>
</body>
</html>