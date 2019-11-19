<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$aduser=$_POST['auser'];
$adpass=$_POST['apin'];

echo "<form action=\"http://localhost/projects/admin.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";

$val=mysqli_query($con,"Select * from adminlogin where auser='$aduser' and apin='$adpass'");

if(mysqli_num_rows($val)>0)
{
include('adminpage1.html');
}
else
{
echo "invalid username and password";
}
?>
</html>