<?php
$id=$_POST["id"];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css?'>
    <script src='main.js'></script>
</head>
<body>
    <form action="send.php" method="post">
        <input type="text" name="name" placeholder="your name">
        <input type="email"name="email" placeholder="your name">
        <input type="number" name="qty" placeholder="your name">
        <button value="<?=$id?>" name="btn">Submit</button>
    </form>
</body>
</html>
