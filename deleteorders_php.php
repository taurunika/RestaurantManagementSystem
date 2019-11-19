<html>
<?php

$onno=$_GET["Ord_No"];

echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$val=mysqli_query($con,"delete from orders where Ord_No='$onno'");
echo "<center>";
echo "<font size=\"25\" color=\"purple\">ORDER DELETED SUCCESSFULLY</font>";
echo "</center>";
?>
</html>