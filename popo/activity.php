<?php include("connect.php")?>
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
        $sql = "SELECT * FROM activity";
        $result = mysqli_query($con, $sql);
        ?>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="item" style="background-image: url(<?php echo $row['path_img'] ?>);">
                <div class="content">
                    <div class="name"><?php echo $row['act_name'] ?></div>
                    <div class="des"><?php echo $row['description'] ?></div>
                    <h2 style="font-size: 14px;">Number of people doing activities</h2>
                    <input type="number" id="typeNumber" class="form-control" min="0" placeholder="ex 3" style="height: 20px; width: 80px;border-radius: 20px ;"/>
                    <h2 style="font-size: 14px;">Choose a day to do the activity</h2>
                    <input type="date" id="start" name="trip-start" placeholder="ex 2023-07-22" style="border-radius: 20px;"/>
                    <button>Booking activity</button>
                </div>
            </div>
        <?php
        }
        mysqli_close($con);
        ?>
            <!-- <div class="item" style="background-image: url(https://hips.hearstapps.com/hmg-prod/images/where-to-go-whale-watching-virginia-1522419979.jpg);">
                <div class="content">
                    <div class="name">Whale Watching</div>
                    <div class="des">Best Places for Whale Watching - When to Go Whale Watching</div>
                    <h2 style="font-size: 14px;">Number of people doing activities</h2>
                    <input type="number" id="typeNumber" class="form-control" min="0" placeholder="ex 3" style="height: 20px; width: 80px;border-radius: 20px ;"/>
                    <h2 style="font-size: 14px;">Choose a day to do the activity</h2>
                    <input type="date" id="start" name="trip-start" placeholder="ex 2023-07-22" style="border-radius: 20px;"/>
                    <button>Booking activity</button>
                </div>
            </div>

            <div class="item" style="background-image: url(https://reefencounter.com.au/files/great-barrier-reef-scuba-diving-1-scaled.jpg);">
                <div class="content">
                    <div class="name">3Whale Watching</div>
                    <div class="des">Best Places for Whale Watching - When to Go Whale Watching</div>
                    <h2 style="font-size: 14px;">Number of people doing activities</h2>
                    <input type="number" id="typeNumber" class="form-control" min="0" placeholder="ex 3" style="height: 20px; width: 80px;border-radius: 20px ;"/>
                    <h2 style="font-size: 14px;">Choose a day to do the activity</h2>
                    <input type="date" id="start" name="trip-start" placeholder="ex 2023-07-22" style="border-radius: 20px;"/>
                    <button>Booking activity</button>
                </div>
            </div>
            
            <div class="item" style="background-image: url(https://laketahoewatertrail.org/wp-content/uploads/2020/10/Alexys-and-Alma-Chimney-Beach.jpg);">
                <div class="content">
                    <div class="name">4Whale Watching</div>
                    <div class="des">Best Places for Whale Watching - When to Go Whale Watching</div>
                    <h2 style="font-size: 14px;">Number of people doing activities</h2>
                    <input type="number" id="typeNumber" class="form-control" min="0" placeholder="ex 3" style="height: 20px; width: 80px;border-radius: 20px ;"/>
                    <h2 style="font-size: 14px;">Choose a day to do the activity</h2>
                    <input type="date" id="start" name="trip-start" placeholder="ex 2023-07-22" style="border-radius: 20px;"/>
                    <button>Booking activity</button>
                </div>
            </div>

            <div class="item" style="background-image: url(https://learninghorses.com/wp-content/uploads/lh-horses-on-beach-80.jpg);">
                <div class="content">
                    <div class="name">5Whale Watching</div>
                    <div class="des">Best Places for Whale Watching - When to Go Whale Watching</div>
                    <h2 style="font-size: 14px;">Number of people doing activities</h2>
                    <input type="number" id="typeNumber" class="form-control" min="0" placeholder="ex 3" style="height: 20px; width: 80px;border-radius: 20px ;"/>
                    <h2 style="font-size: 14px;">Choose a day to do the activity</h2>
                    <input type="date" id="start" name="trip-start" placeholder="ex 2023-07-22" style="border-radius: 20px;"/>
                    <button>Booking activity</button>
                </div>
            </div>

            <div class="item" style="background-image: url(https://www.towerpaddleboards.com/cdn/shop/articles/tandem-couple_1200x1200.jpg?v=1673916892);">
                <div class="content">
                    <div class="name">6Whale Watching</div>
                    <div class="des">Best Places for Whale Watching - When to Go Whale Watching</div>
                    <h2 style="font-size: 14px;">Number of people doing activities</h2>
                    <input type="number" id="typeNumber" class="form-control" min="0" placeholder="ex 3" style="height: 20px; width: 80px;border-radius: 20px ;"/>
                    <h2 style="font-size: 14px;">Choose a day to do the activity</h2>
                    <input type="date" id="start" name="trip-start" placeholder="ex 2023-07-22" style="border-radius: 20px;"/>
                    <button>Booking activity</button>
                </div>
            </div> -->
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
    </div>

    <script src = "activity.js"></script>
</body>
</html>
<!-- <?php mysqli_close($con)?> -->