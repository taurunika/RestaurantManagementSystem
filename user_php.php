<html>
<?php

$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

$uuser=$_GET["ususer"];
$upass=$_GET["upid"];
echo "<center>";

$val=mysqli_query($con,"insert into userlogin values
('$uuser','$upass')");
echo "</br></br></br></br></br></br></br></br></br>";
echo "<center>";
echo "<font size=\"25\" color=\"purple\">LOGIN SUCCESSFUL</font>";
echo "</br></br></br>";
echo "<font size=\"10\" color=\"purple\">Click the below button to continue</font>";
echo "</center>";
echo "</br></br></br>";
echo "<center>";
echo "<form action=\"http://localhost/projects/userpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"PROCEED\">";
echo "</form>";
echo "</center>";
echo "</br></br></br>";
echo "<form action=\"http://localhost/projects/user.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
echo "</center>";
?>
</html>