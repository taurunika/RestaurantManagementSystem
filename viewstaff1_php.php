<html>
<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");
echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";
$result=mysqli_query($con,"Select * from staff");
?>
<html>
<head></head>
<style>
body{
	background-image:url(15.jpg);
	background-repeat:no repeat;
	background-size:cover;
}
</style>
<body>
<h1><b><I><font color="black" size=30>STAFF DETAILS</font></b></I></h1>
<table width="400" border="1" cellpadding="1" cellspacing="1">
<th>STAFF ID</th>
<th>BRANCH ID</th>
<th>STAFF NAME</th>
<th>GENDER</th>
<th>DATE OF BIRTH</th>
<th>DATE OF JOINING</th>
<th>DESIGNATION</th>
<th>SALARY</th>
<th>CONTACT NUMBER</th>

<tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["Sf_id"]."</td>";
echo "<td>".$row["Br_id"]."</td>";
echo "<td>".$row["Sf_Name"]."</td>";
echo "<td>".$row["sgender"]."</td>";
echo "<td>".$row["dob"]."</td>";
echo "<td>".$row["date_of_joining"]."</td>";
echo "<td>".$row["Designation"]."</td>";
echo "<td>".$row["Sal"]."</td>";
echo "<td>".$row["Scontact"]."</td>";
echo "</tr>";
}
?>
</body>
</table>
</html>