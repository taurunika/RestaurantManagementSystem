<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");
echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
$result=mysqli_query($con,"Select * from food");
?>
<html>
<head></head>
<style>
body{
	background-image:url(12.jpg);
	background-repeat:no repeat;
	background-size:cover;
}
</style>
<body>
<h1><b><I><font color="black" size=30>FOOD MENU</font></b></I></h1>
<table width="400" border="1" cellpadding="1" cellspacing="1">
<th>FOOD ID</th>
<th>FOOD NAME</th>
<th>FOOD CATEGORY</th>
<th>FOOD PRICE</th>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["Fid"]."</td>";
echo "<td>".$row["FName"]."</td>";
echo "<td>".$row["FCategory"]."</td>";
echo "<td>".$row["FPrice"]."</td>";
echo "</tr>";
}
?>
</body>
</table>
</html>


