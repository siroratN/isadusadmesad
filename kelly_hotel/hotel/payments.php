<?php include_once('index1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="payment.css">
  <title>Document</title>
</head>
<body>
  <?php
        $sql = "SELECT * FROM customer";
        $result = mysqli_query($connection, $sql);
        $rows = mysqli_fetch_assoc($result);
        $rows = mysqli_fetch_assoc($result);
  ?>
  <div class="PaymentQr">
    <div class="RectSmall"></div>
    <div class="RectQr"></div>
    <img class="ImageHotel" src="image_hotel.png" />
    <div class="RectContact"></div>
    <div class="Payment">PAYMENT</div>
    <div class="QrColumn">QR Code</div>
    <div class="HotelGangnamLunaPoon">HOTEL GANGNAM LUNA POON</div>
    <div class="RectNext"></div>
    <div class="Next">NEXT</div>
    
  <div class="navber">
    <div style="display: flex; flex-direction: row; gap: 10px;">
        <img src="img_dog.png" alt="" class="logo">
        <p class = "name-hotal" style="margin-top:15px; text-decoration: none; color: #fff; text-transform: uppercase;">Hotel gangnam luna poon</p>
    </div>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">BOOKING</a></li>
        <li><a href="#">EXIT</a></li>
    </ul>
</div>
    <div class="RectPaymentmethod">
      <div class="RectWhite"></div>
      <div class="PayWithPromptpayQrCode">Pay with Promptpay QR Code</div>
      <img class="ImagePromptpay" src="image_promptpay.png" />
      <div class="QrMethod">QR Code</div>
      <div class="PaymentMethods">Payment Methods</div>
    </div>
    <div class="RectChose"></div>
    <div class="FirstName">First Name :</div>
    <div class="LastName">Last Name :</div>
    <div class="Email">Email :</div>
    <div class="PhoneNumber">Phone Number :</div>
    <div class="ChooseAProfilePicture">Choose a profile picture :</div>
    <div class="BoxFirstname"><?php echo $rows['first_name'] ?></div>
    <div class="BoxLastname"><?php echo $rows['last_name'] ?></div>
    <div class="BoxEmail"><?php echo $rows['email'] ?></div>
    <div class="BoxPhonenumber"><?php echo $rows['phone'] ?></div>
  </div>
  <img class="ImageQrcode" src="image_qrcode.png" />
  <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />
  

</body>
</html>
