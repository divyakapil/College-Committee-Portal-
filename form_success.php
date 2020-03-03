<?php
include 'connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$emailid=$_POST['emailid'];
    
$sql = "INSERT INTO registration (username, password, confirm, branch, year, emailid)
VALUES ('$username', '$password', '$confirm', '$branch', '$year', '$emailid')";
if(mysqli_query($conn,$sql))
{
    echo "inserted";
}
else
    echo "error";
    ?>