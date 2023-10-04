<?php
require('C:\xamppp\htdocs\isadusadmesad\dbconnect.php');
session_start();
$type = $_POST["type"];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$guest = $_POST['guest'];
$cus_id = $_SESSION['cusid'];
$query = "select first_name
              from customers
              WHERE cus_id = '$cus_id'";
$result = mysqli_query($con, $query);
?>
<?php
$queryy = "select * from rooms 
                JOIN type_room 
                JOIN images
                ON rooms.type_id = type_room.type_id 
                AND rooms.room_num = images.room_num
                WHERE type_name = '$type' AND max_guests >= '$guest' AND status = 'AV' ";
$resultt = mysqli_query($con, $queryy);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <link rel="stylesheet" href="sreach.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css" />
</head>

<body>
    <div class="navber">
        <div style="display: flex; flex-direction: row; gap: 10px;">
            <img src="icon_hotal.png" alt="" class="logo">
            <p class="name-hotal" style="margin-top:15px; text-decoration: none; color: #fff; text-transform: uppercase;">Hotel gangnam luna poon</p>
        </div>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">BOOKING</a></li>
            <li><a href="#">EXIT</a></li>
        </ul>
    </div>
    <?php
    while ($row = $result->fetch_assoc()) {

    ?>
        <div>
            <div class="sec1">
                <div>
                    <div class="welcome">
                        <p style="color: rgb(0, 0, 0); font-size: 15px; font-weight: bold; align-self: flex-end;">Hello <?php echo $row['first_name'] ?> Welcome</p>
                        <p style="color: rgb(0, 0, 0); font-size: 25px; font-weight: bold; align-self: flex-end;">Hotel gangnam luna poon</p>
                    </div>
                </div>
            </div>

        </div>
    <?php
    }
    mysqli_close($con);
    ?>


    <!-- ค้นหาห้อง -->
    <div>
        <form action="bookingdatapopo.php" method='POST'>
            <div class="search-bar" style="width: 1405px; height: 140px; background: rgb(216, 217, 226); box-shadow: 20px 20px 120px 15px rgba(0, 0, 0, 0.05); border-radius: 20px">
                <div>
                    <h2 style="font-size: 14px;">Type room</h2>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 415px; height: 51px; border-radius: 20px; font-size: 14px; padding: 16px;" required>
                        <option value="<?php echo $type; ?> ">
                            <?php echo $type; ?>
                        </option>
                    </select>
                </div>
                <div class="check-in date">
                    <h2 style="font-size: 14px;">Check-in date</h2>
                    <div class='input-group date' id='picker1'>

                        <input type="text" value="<?php echo $check_in; ?>" name="check_in" class="form-control rounded-3xl" placeholder="ex 01/01/2023" style="height: 50px; width: 228;border-top-left-radius:20px;border-bottom-left-radius:20px ;"></input>
                        <span class="input-group-addon" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="check-out date">
                    <h2 style="font-size: 14px;">Check-out date</h2>
                    <div class='input-group date' id='picker2'>
                        <input type='text' value="<?php echo $check_out; ?>" class="form-control" name="check_out" placeholder="ex 05/01/2023" style="height: 50px; width: 228;border-top-left-radius:20px;border-bottom-left-radius:20px ;" />
                        <span class="input-group-addon" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="input_guest">
                    <h2 style="font-size: 14px;">Number of guests</h2>
                    <input type="number" value="<?php echo $guest; ?>" id="typeNumber" name="guest" class="form-control" min="0" placeholder="ex 3" style="height: 50px; width: 228;border-top-left-radius:20px;border-bottom-left-radius:20px;" />
                </div>

                <input type="submit" value="Search" class="btn btn-outline-success" id="sreach-btn" style="width: 168px; height: 51px; border-radius: 20px;"></button>

            </div>
    </div>
    <?php
    while ($row = $resultt->fetch_assoc()) {

    ?>
        <div class="room">
            <img src="./image/<?php echo $row['path_image'];?>"class="room-img"/>
            <div class="room-des">
                <h4><?php echo $row['room_num'] ?></h4>
                <?php
                $_SESSION['roomnum'] = $row['room_num']
                
                ;
                ?>
                <div class="icon-group">
                    <div>
                        <ion-icon class="icon" name="bed-outline"></ion-icon>
                        <p>2 beds</p>
                    </div>
                    <div>
                        <ion-icon class="icon" name="accessibility-outline"></ion-icon>
                        <p><?php echo $row['max_guests'] ?></p>
                    </div>
                    <div>
                        <ion-icon class="icon" name="square-outline"></ion-icon>
                        <p>214m2</p>
                    </div>
                </div>
                <p style="width: 500px;"><?php echo $row['detail'] ?></p>
                <div id="see-detail" class="btn btn-warning"><a href="../roommm/room.php">kuy</a></div>
            </div>
        </div>

        <!-- <div class="room">
            <img src="standard/room1.png" alt="" class="room-img">
            <div class="room-des">
                <div class="icon-group">
                    <div>
                        <ion-icon class="icon" name="bed-outline"></ion-icon>
                        <p>2 beds</p>
                    </div>
                    <div>
                        <ion-icon class="icon" name="accessibility-outline"></ion-icon>
                        <p>2 guests</p>
                    </div>
                    <div>
                        <ion-icon class="icon" name="square-outline"></ion-icon>
                        <p>214m2</p>
                    </div>
                </div>
                <p style="width: 500px;">Details : l residence for all entrepreneurs in the world and is surrounded by lush greenery, imbibed with the traditions of the Indian culture. Premium class accommodations, conference rooms, </p>
                <button id="see-detail" type="button" class="btn btn-warning">See Detail >></button>
            </div>
        </div>

        <div class="room">
            <img src="standard/room1.png" alt="" class="room-img">
            <div class="room-des">
                <h4></h4>
                <div class="icon-group">
                    <div>
                        <ion-icon class="icon" name="bed-outline"></ion-icon>
                        <p>2 beds</p>
                    </div>
                    <div>
                        <ion-icon class="icon" name="accessibility-outline"></ion-icon>
                        <p>2 guests</p>
                    </div>
                    <div>
                        <ion-icon class="icon" name="square-outline"></ion-icon>
                        <p>214m2</p>
                    </div>
                </div>
                <p style="width: 500px;">Details : l residence for all entrepreneurs in the world and is surrounded by lush greenery, imbibed with the traditions of the Indian culture. Premium class accommodations, conference rooms, </p>
                <button id="see-detail" type="button" class="btn btn-warning">See Detail >></button>
            </div>
        </div> -->

    <?php
    }
    if(!isset($con->server_info)){
        // echo 'sql connection is closed';
    }else{
        $con -> close();
    }
    ?>

    <!-- ปิดให้สวย -->
    <div class="rectangle2"></div>

    <script>
        $(function() {
            $('#picker1').datetimepicker({
                format: 'DD/MM/YYYY'
            });
        });
        $(function() {
            $('#picker2').datetimepicker({
                format: 'DD/MM/YYYY'
            });
        });
    </script>

    <!-- import icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
