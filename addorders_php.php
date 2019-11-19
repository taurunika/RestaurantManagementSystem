<html>
<?php

$ono=$_GET["Ord_No"];
$fd=$_GET["Fid"];
$otype=$_GET["Ord_type"];
$ordate=$_GET["Ord_Date"];
$tno=$_GET["Table_no"];

echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$val=mysqli_query($con,"insert into orders values
('$ono','$fd','$otype','$ordate','$tno')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">ORDER INSERTED SUCCESSFULLY</font>";
echo "</center>";
echo "</br></br></br>";
?>
</html>