<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task1</title>
</head>
<body>
<?php
function leapyear($year) {
  if ($year % 4 == 0) {
     echo $year." is a leap year.";
  } elseif ($year % 100 == 0) {
     echo $year." is not a leap year.";
  } elseif ($year % 400 == 0) {
     echo $year." is a leap year.";
  } else {
     echo $year." is not a leap year.";
  }
}

leapyear(2012);
?> 
</body>
</html>