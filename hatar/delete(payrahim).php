<?php
$sl=$_REQUEST['sl'];
$serverName='localhost';
$userName='root';
$password='';
$database='Project';
$connection=new mysqli($serverName,$userName,$password,$database);
$delete_query="DELETE FROM rahim WHERE sl='$sl'";
if(mysqli_query($connection,$delete_query))
{
    echo"Deleted Successfully";
} else
{
    echo"Fail to Delete";
}
echo "<script> location.href='http://localhost/xampp/hatar/Payment(Rahim).php'; </script>";