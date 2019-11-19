<html>
<?php

$fodid=$_GET["Fid"];
echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$val=mysqli_query($con,"delete from food where Fid='$fodid'");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">FOOD DELETED SUCCESSFULLY</font>";
echo "</center>";
echo "</br></br></br>";
?>
</html>