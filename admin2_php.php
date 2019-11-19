<html>
<?php
session_start();
include('adminpage1.html');
if(isset($_POST['login']))
{
$unam=$_POST['auser'];
$pass=$_POST['apid'];
$sql="SELECT * FROM adminlogin WHERE auser=unam and apid=pass";
$query=$dbh->prepare($sql);
$query->bindParam(':unam',$unam,PDO::PARAM_STR);
$query->bindParam(':pass','$pass,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount()>0)
{
$_SESSION['login']=$_POST['auser'];
echo "<script type='text/javascript'>document location='change-password.php';</script>";
}
else
{
echo "<script>alert("Invalid Details');</script>";
}
?>
</html>