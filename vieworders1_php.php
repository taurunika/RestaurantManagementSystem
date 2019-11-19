<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");
echo "<form action=\"http://localhost/projectsadminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
$result=mysqli_query($con,"Select * from orders");
?>
<html>
<head></head>
<style>
body{
	background-image:url(13.jpg);
	background-repeat:no repeat;
	background-size:cover;
}
</style>
<body>
<h1><b><I><font color="black" size=30>ORDERS LIST</font></b></I></h1>
<table width="400" border="1" cellpadding="1" cellspacing="1">
<th>ORDER NUMBER</th>
<th>FOOD ID</th>
<th>ORDER TYPE</th>
<th>ORDER DATE</th>
<th>TABLE NUMBER</th>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["Ord_No"]."</td>";
echo "<td>".$row["Fid"]."</td>";
echo "<td>".$row["Ord_type"]."</td>";
echo "<td>".$row["Ord_Date"]."</td>";
echo "<td>".$row["Table_no"]."</td>";
echo "</tr>";
}
?>
</body>
</table>
</html>




