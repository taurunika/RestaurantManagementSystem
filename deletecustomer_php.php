<html>
<?php

$cd=$_GET["Cust_id"];

echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$val=mysqli_query($con,"delete from customer where Cust_id='$cd'");
echo "<center>";
echo "<font size=\"25\" color=\"purple\">CUSTOMER DETAILS DELETED SUCCESSFULLY</font>";
echo "</center>";
?>
</html>