<?php
require('dbconnect.php');

session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonenumber=$_POST['phonenumber'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$customer_id = rand(10000,99999);
$_SESSION['customer_id'] = $customer_id;


$sql = "INSERT INTO customers_profile(customer_id,firstname,lastname,phonenumber,email,gender)
        values ('$customer_id','$firstname','$lastname','$phonenumber','$email','$gender')";

$result=mysqli_query($con,$sql);
echo file_get_contents('booking.php');
?>
