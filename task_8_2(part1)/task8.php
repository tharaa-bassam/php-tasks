<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function vote($age) 
{

    if ($age >= 18) {
        echo  " you Are eligible For Vote";
    } else {
        echo 
        " you are not eligible for vote. ";
    }
}
vote(12); 

?>
</body>
</html>