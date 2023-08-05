<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task14</title>
</head>

<body>
<?php
$num=range(11,20);
shuffle($num);
for ($x=0; $x< 10; $x++)
{
echo $num[$x].' ';
}
?>

</body>

</html>     