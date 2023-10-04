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
    <link rel="stylesheet" href="par.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
    <title>Document</title>
</head>

<body>
<div class="Desktop14" style="width: 1440px; height: 1024px; position: relative;">
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
  <div>
    <div class="Desktop16" style="width: 1440px; height: 1024px; position: relative; background: white">
        <div class="Parasailing" style="width: 889px; height: 101px; left: 275px; top: 133px; position: absolute; text-align: center; color: #EA5A47; font-size: 80px; font-family: Bayon; font-weight: 400; line-height: 24px; word-wrap: break-word">PARASAILING</div>
        <img class="Pngwing5" style="width: 184px; height: 235px; left: 1000px; top: 38px; position: absolute" src="pngwing.com(4).png" />
        <img class="Pngwing6" style="width: 234px; height: 333px; left: 275px; top: 38px; position: absolute" src="pngwing.com(5).png" />
    </div>
    <div class="container" style="width: 2000px; height: 44.05px; left: 170px; top: 350px; position: absolute;">
        <div class="row mt-5">
            <div class="col">
                <from action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" value="" class="form-control" placeholder="Search data">
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
                            <!-- <td>Status</td> -->
                            <td>Detail</td>
                            <td>Delete</td>
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
    </div>
</body>

</html>
