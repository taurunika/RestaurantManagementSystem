<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");
echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
$result=mysqli_query($con,"Select * from restaurant");
?>
<html>
<head></head>
<style>

body{
	background-image:url(5.jpg);
	background-repeat:no repeat;
	background-size:cover;
}
</style>
<body>
<h1><b><I><font color="black" size=30>BRANCHES LIST</font></b></I></h1>
<table width="400" border="1" cellpadding="1" cellspacing="1">
<th>BRANCH ID</th>
<th>BRANCH NAME</th>
<th>LOCATION</th>
<th>CONTACT NUMBER</th>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["Br_id"]."</td>";
echo "<td>".$row["Br_Name"]."</td>";
echo "<td>".$row["Location"]."</td>";
echo "<td>".$row["Phone"]."</td>";
echo "</tr>";
}
?>