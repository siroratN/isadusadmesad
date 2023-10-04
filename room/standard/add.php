<?php
require('C:\xamppp\htdocs\isadusadmesad\dbconnect.php');
$query = "select *
              from building
              ";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addstand.css">
    <title>Document</title>
</head>

<body>
    <form action="adddata.php" method='POST'>
        <div class="all">
            <div class="Group61" style="width: 539px; height: 1206px; left: 0px; top: 0px; position: absolute">
                <div class="Rectangle13" style="width: 539px; height: 950px; background: rgba(255, 255, 255, 0.75); border-radius: 40px"></div>
                <div class="floor">
                    <div class="textfloor">ชั้น</div>
                    <input class="inputfloor" type="text" id="" name="floor"></input>
                </div>
                <div class="AddStandardRoom" style="width: 319px; height: 30px; left: 150px; top: 44.20px; position: absolute; color: black; font-size: 21px; font-family: Roboto; font-weight: 400; word-wrap: break-word">ADD STANDARD ROOM</div>
                <div class="number">
                    <div class="textnum">เลขห้อง</div>
                    <input class="inputnum" type="text" id="" name="room_num"></input>
                </div>
                <div class="amount">
                    <div class="textamount">จำนวนคน</div>
                    <input class="inputamount" type="text" id="" name="amount"></input>
                </div>
                <div class="confirmbut">
                    <input class="butcon" type="submit" value="CONFIRM"></input>
                </div>
                <div class="canbut">
                    <input class="butcan" type="reset" value="RESET"></input>
                </div>

                <div class="building">
                    <div class="textbuil">ตึก</div>
                    <select class="inputbuil id=" building_id" name="building_id" required>
                        <option value="">-Choose-</option>
                        <?php foreach ($result as $results) { ?>
                            <option value="<?php echo $results["building_id"]; ?>">
                                <?php echo $results["building_id"]; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="detail">
                <div class="textdetail">รายละเอียด</div>
                <input class="inputdetail" type="text" id="" name="detail"></input>
            </div>
            <div class="price">
                <div class="textprice">ราคา</div>
                <input class="inputprice" type="text" id="" name="price"></input>
            </div>
        </div>
</body>

</html>
<?php
mysqli_close($con);
?>
