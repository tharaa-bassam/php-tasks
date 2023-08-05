<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- task3 -->


    <form method="POST" action="index.php">
        <label for="username">Name:</label>
        <input type="text"  name="name" required>
        <button type="submit">Submit</button>
    </form>

    <?php  
           echo $_POST["name"]

?> 
</body>
</html>