<?php
    require('dbconnect.php');
    $query = "select * from room";
    $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = 'stylesheet' href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card-header">
                        <h2 class="display-6 text-center">ข้อมูลห้อง</h2>
                </div>
                
                <div class="card-body">
                <a href="addtype.php" class="btn btn-success mb-4">ADD ROOM TYPE</a>
                <a href="addroom.php" class="btn btn-success mb-4">ADD ROOM</a>
                    <table class="table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td>ID</td>
                            <td>Type</td>
                            <td>Name</td>
                            <td>Number</td>
                            <td>Amount(MAX)</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        
                            <?php
                                while ($row = mysqli_fetch_assoc($result)) 
                                {
                                
                            ?>   
                            <tr> 
                                
                                <td><?php echo $row['room_id']?></td>
                                <td><?php echo $row['room_type']?></td>
                                <td><?php echo $row['room_name']?></td>
                                <td><?php echo $row['room_number']?></td>
                                <td><?php echo $row['amount']?></td>
                                <td><a href="" class="btn btn-warning">Edit </a></td>
                                <td><a href="delete_room.php?id=<?=$row["room_id"]?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                                }
                                mysqli_close($con);
                            ?>
                        
                    </table>
                    <a href="index.php" class="btn btn-success mb-4">HOME</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
