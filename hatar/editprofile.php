<?php
session_start();
$sl=$_REQUEST['sl'];

$serverName='localhost';
$userName='root';
$password='';
$database='Project';
$connection=new mysqli($serverName,$userName,$password,$database);
$customername=$_POST['customername'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];

$dateofBirth=$_POST['dateofBirth'];
$picture=$_POST['picture'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$postalcode=$_POST['postalcode'];
$name=$_SESSION['customername'];
$update_query="UPDATE signup set customername='$customername',mobile='$mobile',gender='$gender',dateofBirth='$dateofBirth',picture='$picture',email='$email',password='$password',address='$address',postalcode='$postalcode' WHERE customername='$name' ";
$result=mysqli_query($connection,$update_query);
if($result)
{
    echo '<script type ="text/JavaScript">';  
echo 'alert("Updated Successfully!")';  
echo '</script>';  
echo "<script> location.href='http://localhost/xampp/hatar/login.php'; </script>";
} else
{
    echo '<script type ="text/JavaScript">';  
echo 'alert("Not Updated Successfully!")';  
echo '</script>';
echo "<script> location.href='http://localhost/xampp/hatar/update profile.php'; </script>";
}
