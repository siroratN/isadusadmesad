<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $id_card = $_POST['id_card'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //database connection
    $conn = mysqli_connect("localhost","root","","hotel");

    
    $sql = "INSERT INTO customers(first_name, last_name, gender, id_card, phone, email, password)
            VALUES ('$first_name','$last_name','$gender','$id_card','$phone','$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "success";
    }else{
        echo("error" . mysqli_error($conn));
    }
?>
