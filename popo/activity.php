<?php require("../dbconnect.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <link rel="stylesheet" href="activity.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <div id="slide">
            <?php
            $sql = "SELECT * FROM activity
                    ORDER BY act_id";
            $result = mysqli_query($con, $sql);
            // echo count(mysqli_fetch_all($result));
            ?>
             <?php
        while ($row = $result->fetch_assoc()) {
        ?>
                <form action="bookingactdata.php?test=<?= $row["act_name"] ?>" method="POST">
                    <div class="item" style="background-image: url(<?php echo $row['path_img'] ?>);">
                        <div class="content">
                            <div class="name"></div><?php echo $row['act_name'] ?></div>
                            <div class="des"><?php echo $row['description'] ?></div>
                            <h2 style="font-size: 14px;">Number of people doing activities</h2>
                            <input type='number' id="typeNumber" name='num' class="form-control" min="0" max="<?php echo $row['maximum_member'] ?>" placeholder="ex 3" style="height: 20px; width: 80px;border-radius: 20px;" />
                            <h2 style="font-size: 14px;">Choose a day to do the activity</h2>
                            <input class="dateCheck" value="inputDate" type='date' id="start" name='dateact' placeholder="ex 2023-07-22" style="border-radius: 20px;z-index: 10;"/>
                            <button type='submit' value="booking" style="left:20px; border-radius: 20px; background-color: green; color: white;">Booking</button>
                        </div>
                    </div>
                
                    <?php
        }
        mysqli_close($con);
        ?></form>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-right"></i></button>
            <a id="next"></a>
            <div style="margin: 10px;">
                <button style="background-color: skyblue; width: 100px; border-radius: 10px;">NEXT</button>
            </div>
        </div>
    </div>

    <script src="activity.js"></script>
    <!-- <script>
        let inputDate;
        
        const logDate = (e) => {
            const dateInput = document.querySelector(".dateCheck");
            inputDate = e.target.value);
            dateInput.value = inputDate;
            console.log(dateInput.value);
        }
    </script> -->
</body>

</html>
