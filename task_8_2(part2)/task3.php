<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$characters = range('A', 'E'); 

for ($i = 0; $i < 5; $i++) { 
    echo "</br>";
    for ($j = 0; $j < 5; $j++) { 
        if ($j < $i) {
            echo $characters[$i] . " ";
        } else {
            echo $characters[$j] . " ";
            
        }
        
    }
    
    echo PHP_EOL;
    
}
?>

</body>
</html>