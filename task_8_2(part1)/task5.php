<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
function test($n) 
{
   if ($n % 3 ==0) {
    echo $n;
}
   else{
    echo "false";
   }
}  
test(4);
   ?> 
</body>
</html>