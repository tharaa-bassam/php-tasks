<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$text = "Orange coding Academy";
$Char = 'c';

$count = 0;

for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] === $Char) {
        $count++;
    }
}

echo  $count ;
?>

</body>
</html>