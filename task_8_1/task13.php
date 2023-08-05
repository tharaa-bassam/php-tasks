<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task13</title>
</head>
<body>
    <?php

$array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $array);
echo "the min number is" . min( $new_array);
echo '<br/>' ;
echo "the max number is" . max( $new_array);


?>
</body>
</html>