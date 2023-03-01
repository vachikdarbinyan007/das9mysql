<?php
$id=$_POST["btn"];
$qty=$_POST["qty"];
$name=$_POST["name"];
$email=$_POST["email"];
$con=mysqli_connect("localhost","root","","mysqldb9");
$sql="INSERT INTO ord(who,email,productid,qty,totalprice) values('$name','$email',$id,$qty,(SELECT price FROM products WHERE id=$id)*$qty)";
mysqli_query($con,$sql);
header("Location:index.php?orderstatus=1");
?>