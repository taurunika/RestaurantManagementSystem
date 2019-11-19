<html>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

echo "<form action=\"http://localhost/projects/login1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


switch($_REQUEST['button'])
{
	case 'LOGIN AS ADMIN':
	include('admin.html');
	break;
	case 'LOGIN AS USER':
	include('user.html');
	break;
}
?>
</html>