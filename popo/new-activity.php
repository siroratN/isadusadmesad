<?php include("connect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new activity</title>
    <link rel="stylesheet" href="new-activity.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<body>

    <div class="navber">
        <div style="display: flex; flex-direction: row; gap: 10px;">
            <img src="background/icon_hotal.png" alt="" class="logo">
            <p class = "name-hotal" style="margin-top:15px; text-decoration: none; color: #fff; text-transform: uppercase;">Hotel gangnam luna poon</p>
        </div>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">BOOKING</a></li>
            <li><a href="#">EXIT</a></li>
        </ul>
    </div>

    <div class="container">

        <?php
            $sql = "SELECT * FROM activity";
            $result = mysqli_query($con, $sql);
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        ?>

        <?php foreach ($rows as $row):?>
        <div class ="act">
            <div class="pic-act" style="margin-top: 65px;">
                <div class = "circle">
                    <img class = "img-act" src="<?php echo $row["path_img"]?>" alt="">
                </div>
            </div>
            <div class = "des-act">
                <p style="font-size: 25px;"><?php echo $row["act_name"]?> </p>
                <p style="font-size: 17px;">Max member : <?php echo $row["maximun_member"]?> </p>
                <p style="width: 400px;">Descripition : <?php echo $row["description"]?> </p>
                <div class="line" style="margin-top: 5px; width: 100%; border-top: 2px rgb(105, 128, 0) solid;"></div>
                <p style="font-size: 17px;">Prices : <?php echo $row["price"]?> </p>
                <p style="font-size: 14px;">Number of people doing activities</p>
                <input type="number" min="0" placeholder="ex 3" style=" height: 20px; width: 80px;"/>
                <p style="font-size: 14px;">Choose a day to do the activity</p>
                <input type="date" id="start" name="trip-start" placeholder="ex 2023-07-22" style="height: 28px; width: 150px; margin-bottom: 10px;"/>
                <button type="button" class="btn btn-warning" style="color: #fff;">Activity booking</button>  
            </div>
        </div>
        <?php endforeach; ?>

        <button style = "width: 100px; align-self: self-end;" type="button" class="btn btn-success">Next</button>
    </div>

</body>
</html>

<?php mysqli_close($con)?>