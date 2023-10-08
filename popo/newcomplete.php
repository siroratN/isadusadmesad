<?php include("connect.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewComplete</title>
    <link rel="stylesheet" href="newcomplete.css">
</head>
<body>
    <!-- NAVBAR -->
    <div class="navber">
      <div style="display: flex; flex-direction: row; gap: 10px;">
          <img src="" alt="" class="logo">
          <p class = "name-hotal" style="margin-top:15px; text-decoration: none; color: #fff; text-transform: uppercase;">Hotel gangnam luna poon</p>
      </div>
      <ul>
          <li><a href="#">HOME</a></li>
          <li><a href="#">BOOKING</a></li>
          <li><a href="#">EXIT</a></li>
      </ul>
    </div>
    <!-- SLEEVE -->
    <div class="confirmation">
      <div class="header">
        <h1 style="font-size: 35px;">Booking Confirmation</h1>
      </div>

      <?php
        $sql = "SELECT * 
                FROM customers
                JOIN  booking 
                JOIN rooms
                JOIN type_room
                ON customers.cus_id = booking.cus_id
                and booking.room_num = rooms.room_num
                and  rooms.type_id = type_room.type_id
                where  booking.booking_id = 3";
        $result = mysqli_query($con, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
      ?>
      <div class="payment-sleeve">
        <?php foreach($rows as $row):;?>
          <div style="margin: 20px;"><p><strong style="font-size: 25px;">Mr.<?php echo $row["first_name"];?> <?php echo $row["last_name"];?></strong></p></div>
          <div><p style="text-align: center; font-size: 20px;">Hotel Gangnam Luna Poon</p></div>
          <div class="Line1"></div>
          <div><h3 style="margin-bottom: 20px; text-align: left;">BookingID: <?php echo $row["booking_id"];?></h3></div>
          <div class="payment-grid">
              <div class="bookingid"><strong>Type room:</strong> <?php echo $row["type_name"];?></div>
              <div class="roomid"><strong>Guest:</strong> <?php echo $row["guest"];?></div>
              <div class="check-in-date"><strong>Check-in :</strong> <?php echo $row["check-in"];?></div>
              <div class="check-out-date"><strong>Check-out :</strong> <?php echo $row["check-out"];?></div>
              <div class="room-type"><strong>Email:</strong> <?php echo $row["email"];?></div>
              <div class="check-out-time"><strong>Phone number:</strong> <?php echo $row["phone"];?></div>
          </div>
          <div class="Line1"></div>
          <div>
            <p class="status" style="text-align: left;"><strong>Status:</strong> waiting</p>
          </div>
          <div class="total-amount" style="text-align: left; margin: 30px 0px 0px 0px;"><strong>Total Amount:</strong> <?php echo $row["total_price"];?></div>
          <p style="margin: 70px 0px 0px 0px;">* Please take a photo of your hotel reservation to confirm on the check-in day.</p>
        <?php endforeach?>
      </div>

    </div>
</body>
</html>
<?php mysqli_close($con)?>