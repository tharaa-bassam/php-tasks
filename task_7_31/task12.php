<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task12</title>
</head>
<body>
<?php
$old_string = 'The brown fox';
$new_string ='quick';
$position = 4;
$new_string = substr_replace($old_string, $new_string , $position , 0);
echo $new_string;
?> 
</body>
</html>