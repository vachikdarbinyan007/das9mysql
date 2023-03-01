<?php
if(isset($_GET["orderstatus"])){
    echo "<p style='text-align:center;background:green;'>Your order is registrated! Thank you for buying from us</p>";
};
$con=mysqli_connect("localhost","root","","mysqldb9");
$sql="SELECT * FROM products";
$result=mysqli_query($con,$sql);
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
    <style>
        #cart_div{
    width: 50px;
    height: 50px;
    border: solid;
    background-color: red;
    border-radius: 50%;
    text-align: center;
    position:fixed;
}
    </style>
</head>
<body>
    <div id="header">
        <img src="https://th.bing.com/th/id/R.157b6e166fb34be430bceb40d0683f33?rik=%2f6NB%2fANLgaxYEA&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f1%2fCoffee-Logo-Transparent-Background.png&ehk=pm33tl2SUmED719HKBoMCqaag70%2fnwdTfwMcBjwcyV4%3d&risl=&pid=ImgRaw&r=0" alt="logo" height="25%"/>
        <h1>Cafe Number 1.</h1>
        <span>Just Coffee...</span>
    </div>
    <div id="products">
        <h1 style="margin:0;">Products</h1>
        <div id="prod_bar">
            <?php
            while($togh = mysqli_fetch_assoc($result)){
                	include "prod.php";    
            }
            ?>
        </div>
    </div>
</body>
</html>
