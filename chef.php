<?php
$con=mysqli_connect("localhost","root","","mysqldb9");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CHEF PAGE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='chef.css'>
</head>
<body>
    <h1>Hello Chef!</h1>
    <table>
        <tr>
            <th>Sum</th>
            <th>max</th>
            <th>min</th> 
            <th>avg</th>         
            <tr>
            <td>
            <?php $sql="SELECT SUM(totalprice) FROM ord";$result=mysqli_query($con,$sql); while($togh=mysqli_fetch_array($result)){echo $togh["SUM(totalprice)"];};?>
            </td>
            <td>
            <?php $sql="SELECT MAX(totalprice) FROM ord";$result=mysqli_query($con,$sql); while($togh=mysqli_fetch_array($result)){echo $togh["MAX(totalprice)"];};?>
            </td>
            <td>
            <?php $sql="SELECT MIN(totalprice) FROM ord";$result=mysqli_query($con,$sql); while($togh=mysqli_fetch_array($result)){echo $togh["MIN(totalprice)"];};?>
            </td>
            <td>
            <?php $sql="SELECT AVG(totalprice) FROM ord";$result=mysqli_query($con,$sql); while($togh=mysqli_fetch_array($result)){echo $togh["AVG(totalprice)"];};?>
            </td>
            </tr>
        </tr>
    </table>
    <table style="margin-top:35px;">
        <th>Id</th>
        <th>QTY</th>
        <th>price</th>
            <?php
            $sql="SELECT productid,SUM(qty),(SELECT price FROM products WHERE id=productid) AS gin FROM ord GROUP BY productid;            ";
            $result=mysqli_query($con,$sql);
            while($togh=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>";
                echo  $togh["productid"];
                echo "</td>";

                echo "<td>";
                echo  $togh["SUM(qty)"];
                echo "</td>";

                echo "<td>";
                echo  $togh["gin"];
                echo "</td>";


                echo "</tr>";
            };
            ?>
    </table>
</body>
</html>