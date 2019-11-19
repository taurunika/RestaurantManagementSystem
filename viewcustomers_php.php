<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");
echo "<form action=\"http://localhost/projects/userpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
$result=mysqli_query($con,"select * from customer");
?>
<html>
<head></head>
<style>
body{
	background-image:url(11.jpg);
	background-repeat:no repeat;
	background-size:cover;
}
</style>
<body>
<h1><b><I><font color="black" size=30>CUSTOMER DETAILS</font></b></I></h1>
<table width="400" border="1" cellpadding="1" cellspacing="1">
<th>CUSTOMER ID</th>
<th>BRANCH ID</th>
<th>CUSTOMER NAME</th>
<th>GENDER</th>
<th>CONTACT NUMBER</th>
<th>REVIEW</th>
<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["Cust_id"]."</td>";
echo "<td>".$row["Br_id"]."</td>";
echo "<td>".$row["Cust_Name"]."</td>";
echo "<td>".$row["gender"]."</td>";
echo "<td>".$row["CPhone"]."</td>";
echo "<td>".$row["Review"]."</td>";
echo "</tr>";
}
?>
</body>
</table>
</html>