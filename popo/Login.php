<?php include("connectreview.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Loginstyle.css">
</head>
<body style="background: url(https://images.pexels.com/photos/189296/pexels-photo-189296.jpeg?cs=srgb&dl=pexels-donald-tong-189296.jpg&fm=jpg) no-repeat;
    background-size: cover;
    background-position: center;">
    
<!-- แถบ navigate bar -->
    <div>
        
        <nav class="navigation">
            <!-- <a href="#">HOTELS & ROOMS</a>
            <a href="#">ACTIVITY</a>
            <a href="#">CART</a>
            <a href="#">CREATE-ACCOUNT</a>
            <a href="#">SIGN-IN</a> -->
            <!-- <button class="btnLogin-popup">Login</button> -->
        </nav>
    </div>

<!-- กรอบ Login และ Register -->
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
<!-- หน้า Login -->
        <div class="form-box login">
            <h2>Login</h2>

            <?php     
                if((isset($_GET["mail"]) && isset($_GET["pass"]))){
                    session_start();
                    $email = $_GET["mail"];
                    // header("location:seccion.php");
                    $password = $_GET["pass"];                                                             
                    $sql = "SELECT * FROM customers where email = '$email'";
                    $result= mysqli_query($db, $sql);
                    $row= mysqli_fetch_array($result);
                    if($row['email'] == NULL){
                        $message = "ไม่มีบัญชี";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }else{
                        if($row['password'] == $password){
                            $_SESSION['cus_id'] = $row['cus_id'];
                            header("Location: http://localhost/isadusadmesad/popo/home.php");
                        }else{
                            $messages = "โง่";
                            echo "<script type='text/javascript'>alert('$messages');</script>";
                        }
                    }
                }
                
                
            ?>

            <form>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="mail" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="pass" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <!-- <label><input type="checkbox" name="checkbox"> -->
                    <!-- Remember me</label> -->
                    <!-- <a href="#">Forgot password?</a> -->
                </div>
                <a href="../popo/home.php">
                    <button type="submit" class="btn" id="btnlogin" name= "login" value="Login">Log in</button>
                </a>
                <div class="login-register">
                    <p>Don't have an account? 
                        <a href="#" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>

<!-- หน้า Register -->
        <div class="form-box register">
            <h2>Registration</h2>
            <form action="register_db.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <input type="firstname" name="first_name" required>
                    <label>First name</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <input type="lastname" name="last_name" required>
                    <label>Lastname</label>
                </div>
                
                <div class="genderchoice">
                    <div class="gender">
                        <label>Gender</label>
                    </div>
                    <div class="genderradio">
                        <input type="radio" id="genderChoice1" name="gender" value="Male" />
                        <label for="contactChoice1">Male</label>
                
                        <input type="radio" id="genderChoice2" name="gender" value="Female" />
                        <label for="contactChoice2">Female</label>
                
                        <input type="radio" id="genderChoice3" name="gender" value="Others" />
                        <label for="contactChoice3">Others</label>
                    </div>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="id-card-outline"></ion-icon>
                    </span>
                    <input type="idcard" name="id_card" required>
                    <label>ID Card</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="call-outline"></ion-icon>
                    </span>
                    <input type="phone" name="phone" required>
                    <label>Phone</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input type="password" name="" >
                    <label>Confirm Password</label> 
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    I agree to terms & conditions </label>
                </div>
                <button type="submit" class="btn" name="btnregis">Register</button>
                <div class="login-register">
                    <p>Already have an account? 
                        <a href="#" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script src="Loginscript.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php mysqli_close($db)?>