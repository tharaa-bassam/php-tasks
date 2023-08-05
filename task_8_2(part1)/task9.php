<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function CheckNumber($x) {
  if ($x > 0)
    {echo "Positive number";}
  if ($x == 0)
    {echo "Zero";}
  if ($x < 0)
    {echo "Negative number";}
  
}

CheckNumber(-5);
CheckNumber(1);
?>
</body>
</html>