<?php
$conn = mysqli_connect("localhost", "root", "", "hotel");
session_start();
$fn = $_SESSION['first_name'];
$sql = "select cus_id
              from customers
              WHERE first_name = '$fn'
              ";
// $result = mysqli_query($con, $query);
foreach ($conn->query($sql) as $row) {
    // echo $row['cus_id'];
    // $cusid = $row['cus_id'];
    $_SESSION['cusid'] = $row['cus_id'];
    header("location:search.php");
}
?>
