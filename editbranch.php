<?php
$con=mysqli_connect("localhost:3306","root","");
mysqli_select_db($con,"project");
if(isset($_REQUEST["edit"]))
{
$edit=$_REQUEST["edit"];
$sqli="select * from employee WHERE Br_id='$edit'";
$rec1=mysqli_query($con,$sqli);
$row=mysqli_fetch_array($rec1");
}
if(isset($_REQUEST["update"]))
{
$brhid=$_REQUEST["Br_id"];
$brhnm=$_REQUEST["Br_Name"];
$lc=$_REQUEST["Location"];
$phne=$_REQUEST["Phone"];

$upd="UPDATE restaurant set Br_Name='$brhnm' , Location='$lc' , Phone='$phne'";
mysqli_query($con,$upd);
header('
}

?>
<html>
<style>
body{
margin=0;
}
<center>
<h1>EDIT BRANCH DETAILS</hi>
<ta