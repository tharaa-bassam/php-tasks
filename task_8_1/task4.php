<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task4</title>
</head>

<body>
    <?php
    $oldarr = array('1', '2', '3', '4', '5');

    $inserted = '$';
    array_splice($oldarr, 3, 0, $inserted);

    foreach ($oldarr as $x) {
        echo "$x ";
    }

    ?>
</body>

</html>