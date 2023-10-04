<?php
    require('dbconnect.php');
    session_start();
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $idcard = $_POST['idcard'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['first_name'] = $firstname;
    header("location:seccion.php");
    
    //database connection
    $sql = "INSERT INTO customers(first_name, last_name, gender, id_card, phone, email, password)
            VALUES ('$firstname','$lastname','$gender','$idcard','$phone','$email', '$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "success";
    }else{
        echo("error" . mysqli_error($con));
    }
?>
