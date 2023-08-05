<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task8</title>
</head>

<body>
    <?php

    $temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
    $temp_array = explode(',', $temp);
    // print_r($temp_array);
    $tot_temp = 0;
    $temp_array_length = count($temp_array);
    foreach ($temp_array as $x) {
        $tot_temp += $x;
    }
    $avg_temp = $tot_temp/$temp_array_length;
    echo "Average  is : $avg_temp
   "; 

    ?>
</body>

</html>