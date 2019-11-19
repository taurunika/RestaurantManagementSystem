<html>
<?php


$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

echo "<form action=\"http://localhost/projects/welcome.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";

include("login1.html");