<?php
$con = mysqli_connect("localhost", "root", "", "Hotel");
$query = "select *
              from rooms
              INNER JOIN types 
              ON rooms.type_id=types.type_id
              INNER JOIN status_booking  
              ON rooms.status=status_booking.status
              INNER JOIN building
              ON rooms.building_id=building.building_id
              WHERE rooms.type_id = '2'";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <img class="2" style="width: 1440px; height: 342px; left: 0px; top: 64px; position: absolute; border-radius: 10px" src="1.jpg" />
    <div class="Rectangle744" style="width: 1440px; height: 74px; left: 0px; top: 0px; position: absolute; background: black"></div>
    <div class="Profile" style="width: 117px; height: 21px; left: 1283px; top: 28px; position: absolute; color: #FFC700; font-size: 20px; font-family: Lato; font-weight: 600; word-wrap: break-word">PROFILE</div>
    <div class="Hotel" style="width: 147px; height: 20px; left: 71px; top: 27px; position: absolute; color: #FD9B10; font-size: 20px; font-family: Quicksand; font-weight: 700; word-wrap: break-word">HOTEL</div>
    <div class="HotelGangnamLunaPoon" style="width: 997px; height: 100px; left: 221px; top: 198px; position: absolute; text-align: center; color: #E6E6E6; font-size: 64px; font-family: Antic Didone; font-weight: 400; word-wrap: break-word">SUPERIOR</div>
    <img class="logo" style="width: 40px; height: 38px; left: 24px; top: 20px; position: absolute" src="2.png" />
    <div class="container" style="width: 2000px; height: 44.05px; left: 180px; top: 400px; position: absolute;">

        <div class="row mt-5">
            <div class="col">
                <from action="" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" name="search" value="" class="form-control" placeholder="Search data">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </from>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark table-warning text-center">
                            <td>Room Number</td>
                            <td>floor</td>
                            <!-- <td>Type</td> -->
                            <td>Max Child</td>
                            <td>Max Adult</td>
                            <td>Status</td>
                            <td>Detail</td>
                            <td>Delete</td>
                        </tr>

                        <?php
                        while ($row = $result->fetch_assoc()) {

                        ?>
                            <tr>

                                <td><?php echo $row['room_number'] ?></td>
                                <td><?php echo $row['floor'] ?></td>
                                <!-- <td><?php echo $row['type_name'] ?></td> -->
                                <td><?php echo $row['max_child'] ?></td>
                                <td><?php echo $row['max_adult'] ?></td>
                                <td><?php echo $row['status_room'] ?></td>
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
