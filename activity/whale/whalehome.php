<?php
require('C:\xamppp\htdocs\isadusadmesad\dbconnect.php');
$query = "select *
              from booking_activity";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../parasailing/par.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <div class="Desktop17" style="width: 1440px; height: 1310px; position: relative; background: white">
        <div class="navber">
            <div style="display: flex; flex-direction: row; gap: 10px;">
                <img src="../../room/imagee/dog.png" alt="" class="logo">
                <p class="name-hotal" style="margin-top:15px; text-decoration: none; color: #fff; text-transform: uppercase;">Hotel gangnam luna poon</p>
            </div>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">BOOKING</a></li>
                <li><a href="#">EXIT</a></li>
            </ul>
        </div>

        <div class="WhaleWatching" style="width: 889px; height: 101px; left: 295px; top: 238px; position: absolute; text-align: center; color: #133240; font-size: 70px; font-family: Bayon; font-weight: 400; line-height: 24px; word-wrap: break-word">WHALE WATCHING</div>
        <img class="Pngwing7" style="width: 229px; height: 184px; left: 286px; top: 126px; position: absolute" src="pngwing.com(8).png" />
        <div class="container" style="width: 2000px; height: 44.05px; left: 180px; top: 290px; position: absolute;">

            <div class="row mt-5">
                <div class="col">
                    <from action="" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" name="search" value="" class="form-control" placeholder="Booking ID">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                        </div>
                    </from>
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <tr class="text-center">
                                <td>Booking Activity ID</td>
                                <td>Booking ID</td>
                                <!-- <td>Type</td> -->
                                <td>Date</td>
                                <td>Member</td>
                                <!-- <td>Status</td>
<td>Detail</td>
<td>Delete</td> -->
                            </tr>

                            <?php
                            while ($row = $result->fetch_assoc()) {

                            ?>
                                <tr>

                                    <td><?php echo $row['booking_act_id'] ?></td>
                                    <td><?php echo $row['booking_id'] ?></td>
                                    <td><?php echo $row['act_date'] ?></td>
                                    <td><?php echo $row['activity_member'] ?></td>
                                    <!-- <td><?php echo $row['status_room'] ?></td> -->
                                    <td><a href="detailroom.php?id=<?= $row["room_number"] ?>" class="btn btn-outline-info">
                                            <i class="bi bi-info-circle"></i></a></td>
                                    <td><a href="delete_room.php?id=<?= $row["room_number"] ?>" class="btn btn-outline-danger">
                                            <i class="bi bi-trash"></i></a></td>
                                </tr>
                            <?php
                            }
                            mysqli_close($con);
                            ?>

                        </table>
                        <a href="index.php" class="btn btn-outline-success">
                            <i class="bi bi-house"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

</body>

</html>
