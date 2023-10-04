<?php
require('dbconnect.php');
session_start();
$em = $_SESSION['email'];
$sql = "SELECT cus_id
              FROM customers
              WHERE email = '$em'
              ";
$result = mysqli_query($con, $sql);
echo $em;
// 
// foreach ($conn->query($sql) as $row) {
    // echo $row['cus_id'];
    // $cusid = $row['cus_id'];
    // $_SESSION['cusid'] = $row['cus_id'];
    // header("location:review.php");
// }
?>
