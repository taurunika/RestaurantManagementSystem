<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");
$sid=$_GET["Sf_id"];
$bhid=$_GET["Br_id"];
$sname=$_GET["Sf_Name"];
$gn=$_GET["sgender"];
$sdob=$_GET["dob"];
$doj=$_GET["date_of_joining"];
$desg=$_GET["Designation"];
$sal=$_GET["Sal"];
$scontno=$_GET["Scontact"];
echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


$val=mysqli_query($con,"select * from staff where Sf_id='$sid'");
if(mysqli_num_rows($val)>0)
{
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">STAFF ID ALREADY EXISTS</font>";
echo "</center>";
echo "</br></br></br>";
}
else
{
$val1=mysqli_query($con,"insert into staff values
('$sid','$bhid','$sname','$gn','$sdob','$doj','$desg','$sal','$scontno')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">STAFF DETAILS INSERTED SUCCESSFULLY</font>";
echo "</center>";
echo "</br></br></br>";
}
?>
</html>