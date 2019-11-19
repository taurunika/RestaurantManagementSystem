<html>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");

echo "<form action=\"http://localhost/projects/adminpage1.html\">";
echo "<input type=\"submit\"name=\"button\"value=\"BACK\">";
echo "</form>";


switch($_REQUEST['button'])
{
case 'ADD BRANCH':
include('addbranch.html');
break;
case 'ADD FOOD ITEMS':
include('addfood.html');
break;
case 'ADD ORDERS':
include('addorders.html');
break;
case 'ADD CUSTOMERS':
include('addcustomer.html');
break;
case 'ADD STAFF':
include('addstaff.html');
break;
case 'REMOVE BRANCH':
include('deletebranch.html');
break;
case 'REMOVE FOOD ITEMS':
include('deletefood.html');
break;
case 'REMOVE ORDERS':
include('deleteorders.html');
break;
case 'REMOVE CUSTOMERS':
include('deletecustomer.html');
break;
case 'REMOVE STAFF':
include('deletestaff.html');
break;
case 'VIEW BRANCHES':
include('viewbranch1_php.php');
break;
case 'VIEW FOOD MENU':
include('viewfood1_php.php');
break;
case 'VIEW ORDER LIST':
include('vieworders1_php.php');
break;
case 'VIEW CUSTOMER LIST':
include('viewcustomers1_php.php');
break;
case 'VIEW STAFF LIST':
include('viewStaff1_php.php');
break;
case 'LOGOUT':
include('thankyou.html');
break;
}
?>
</html>