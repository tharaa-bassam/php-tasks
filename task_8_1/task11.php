<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task11</title>
</head>
<body>
    <?php
    
$colors=array("RED","BLUE","WHITE","YELLOW");
$colors = array_flip($colors);
echo'<pre>';
print_r(array_change_key_case($colors , CASE_LOWER));
echo'</pre>';
    
    ?>
</body>
</html>