<html>
<?php

$stfd=$_GET["Sf_id"];

echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$val=mysqli_query($con,"delete from staff where Sf_id='$stfd'");
echo "<center>";
echo "<font size=\"25\" color=\"purple\">STAFF MEMBER DELETED SUCCESSFULLY</font>";
echo "</center>";
?>
</html>