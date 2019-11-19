<html>
<?php
$bid=$_GET["Br_id"];
$bname=$_GET["Br_Name"];
$loct=$_GET["Location"];
$bcno=$_GET["Phone"];
echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$val=mysqli_query($con,"select * from restaurant where Br_id='$bid'");
if(mysqli_num_rows($val)>0)
{
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">BRANCH ID ALREADY EXISTS</font>";
echo "</center>";
echo "</br></br></br>";
}
else
{
$val1=mysqli_query($con,"insert into restaurant values
('$bid','$bname','$loct','$bcno')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">RESTAURANT BRANCH INSERTED SUCCESSFULLY</font>";
echo "</center>";
echo "</br></br></br>";
}
?>
</html>