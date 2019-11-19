<html>
<?php
$con = mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");


switch($_REQUEST['button'])
{
case 'VIEW BRANCHES':
include('viewbranch_php.php');
break;
case 'VIEW FOOD MENU':
include('viewfood_php.php');
break;
case 'VIEW ORDER LIST':
include('vieworders_php.php');
break;

break;
case 'VIEW STAFF LIST':
include('viewStaff_php.php');
break;
case 'LOGOUT':
include('thankyou.html');
break;
case 'BACK':
include('user.html');
break;
}


?>
</html>