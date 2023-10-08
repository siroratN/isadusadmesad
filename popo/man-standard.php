<?php include("connect.php")?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Standard rooms</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="man-standard.css">
  </head>

  <body>

    <div class="navber">
        <div style="display: flex; flex-direction: row; gap: 10px;">
            <img src="background/icon_hotal.png" alt="" class="logo">
            <p class = "name-hotal" style="margin-top:15px; text-decoration: none; color: #fff; text-transform: uppercase;">Hotel gangnam luna poon</p>
        </div>
        <ul>
            <li><a href="http://localhost/isadusadmesad/popo/admin.php">HOME ADMIN</a></li>
            <li><a href="http://localhost/isadusadmesad/popo/home.php">EXIT</a></li>
        </ul>
    </div>
    
    <?php
        $sql = "SELECT * FROM rooms
                JOIN type_room
                JOIN status_booking
                JOIN building
                ON rooms.type_id = type_room.type_id
                AND rooms.status = status_booking.status
                AND rooms.building_id = building.building_id
                where type_name = 'Standard'";
        $result = mysqli_query($con, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>


    <div class = "all" >
        <div class="des-book" style="font-size: 25px;">
            <p>Management Standard Rooms</p>
        </div>

        <div class="add" style="margin: 10px; display: flex; justify-content: flex-end;">
            <button type="button" class="btn btn-outline-success">Add new room</button>
        </div>
        
        <table class="table table table-striped">
        <thead>
            <tr>
                <th scope="col">room_num</th>
                <th scope="col">floor</th>
                <th scope="col">building</th>
                <th scope="col">type_name</th>
                <th scope="col">max_guests</th>
                <th scope="col">detail</th>
                <th scope="col">prices</th>
                <th scope="col">status</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($rows as $row):
            ?>

            <tr>
                <td><?php echo $row['room_num']?></td>
                <td><?php echo $row['floor']?></td> 
                <td><?php echo $row['building_name']?></td> 
                <td><?php echo $row['type_name']?></td>
                <td><?php echo $row['max_guests']?></td>
                <td><?php echo $row['detail']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['status_name']?></td>
                <form action="delete_room.php?room_num=<?= $row["room_num"] ?>" method="post">
                    <input type="hidden" value="t">
                    <td><input type="submit" name = "delete" value="delete" class="btn btn-outline-warning"></input></td>
                </form>
            </tr>

            <?php endforeach?>
        </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        	
        let table = new DataTable('.table');
    </script>
</body>
</html>
<?php mysqli_close($con)?>