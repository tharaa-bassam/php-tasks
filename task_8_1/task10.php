<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task10</title>
</head>
<body>
    <?php
$colors=array("red","blue","white","yellow");
$colors = array_flip($colors);
echo'<pre>';
print_r(array_change_key_case($colors , CASE_UPPER));
echo'</pre>';

?>
</body>
</html>