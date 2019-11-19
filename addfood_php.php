<html>
<?php

$fdid=$_GET["Fid"];
$fdname=$_GET["FName"];
$fdcat=$_GET["FCategory"];
$fdprice=$_GET["FPrice"];

echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");


$val=mysqli_query($con,"select * from food where Fid='$fdid'");
if(mysqli_num_rows($val)>0)
{
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">FOOD ID ALREADY EXISTS</font>";
echo "</center>";
echo "</br></br></br>";
}
else
{
$val1=mysqli_query($con,"insert into food values
('$fdid','$fdname','$fdcat','$fdprice')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">FOOD ITEM INSERTED SUCCESSFULLY</font>";
echo "</center>";
echo "</br></br></br>";
}
?>
</html>