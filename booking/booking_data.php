<?php
require('dbconnect.php');

session_start();
$check_in=$_POST['check_in'];
$check_out=$_POST['check_out'];
$amount_user=$_POST['amount_user'];
$customers_id = $_SESSION['customer_id'];
$booking_id = rand(11,99);

$sql = "INSERT INTO booking(booking_id,customer_id,check_in,check_out,amount_user)
        VALUES('$booking_id','$customers_id','$check_in','$check_out','$amount_user')";

$result=mysqli_query($con,$sql);
echo file_get_contents('selectroom.php');
?>
