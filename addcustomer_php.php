<html>
<?php

$cid=$_GET["Cust_id"];
$bid=$_GET["Br_id"];
$cname=$_GET["Cust_Name"];
$gen=$_GET["gender"];
$ccontno=$_GET["CPhone"];
$rat=$_GET["Review"];

echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");


$val=mysqli_query($con,"select * from customer where Cust_id='$cid'");
if(mysqli_num_rows($val)>0)
{
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">CUSTOMER ID ALREADY EXISTS</font>";
echo "</center>";
echo "</br></br></br>";
}
else
{
$val1=mysqli_query($con,"insert into customer values
('$cid','$bid','$cname','$gen','$ccontno','$rat')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">CUSTOMER DETAILS INSERTED SUCCESSFULLY</font>";
echo "</center>";
echo "</br></br></br>";
}
?>
</html>