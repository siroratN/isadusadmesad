<?php include_once("indexx.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="room.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
  <?php
        $sql = "SELECT * FROM rooms WHERE room_num = 102";
        $result = mysqli_query($connection, $sql);
        $rows = mysqli_fetch_assoc($result);
  ?>
<div class="navber">
        <div style="display: flex; flex-direction: row; gap: 10px;">
            <img src="icon_hotal.png" alt="" class="logo">
            <p class = "name-hotal" style="margin-top:15px; text-decoration: none; color: #fff; text-transform: uppercase;">Hotel gangnam luna poon</p>
        </div>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">BOOKING</a></li>
            <li><a href="#">EXIT</a></li>
        </ul>
    </div>  

  <form action="reviewBooking.php" method='POST'>
  <div class="Room">
    <img class="Image4" src="image 3 (1).png" />
    <img class="Image3" src="image 3 (1).png" />
    <img class="Image2" src="image 2.png" />
  <div class = "imageall">
<div class="slider">
        <div class="images">
            <input type="radio" name="slide" id="img1" checked>
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
            <input type="radio" name="slide" id="img4">

            <img src="image 1.png" class="m1" alt="img1">
            <img src="image 23.png" class="m2" alt="img2">
            <img src="image 24.png" class="m3" alt="img3">
            <img src="image 41.png" class="m4" alt="img4">
        </div>
        <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
        </div>
    </div>
</div>
    <div class="Line" ></div>
    <div class="Star">
      <img class="Star1" src="star.png" />
      <img class="Star2" src="star.png" />
      <img class="Star3" src="star.png" />
      <img class="Star4" src="star.png" />
      <img class="Star5" src="star.png" />
    </div>
    <div class="Typeroom" >STANDARD ROOM</div>
    <div class="Roomdetail" >

      <div class="Alldetail"><?php echo $rows["detail"]?></div>
      <div class="Description" >Description</div>
    </div>
    <div class="Bookprice">
      <div class="Price" >999B </div>
      <div class="PerNight" >per night</div>
      <input class = "BookButton"type="submit" value = "Book Now" ></input>
    </div>
    <div class="Emojidetail" >
      <div class="Bedsize" >1 King size bed</div>
      <div class="Guests" >up to 3 GUESTS</div>
      <div class="Arearoom" >40.2 M2</div>
      <div class="Bathroom" >1 bathroom</div>
      <img class="Bedimg" src="Bedimg.png"/>
      <img class="Guestsimg" src="Guestsimg.png"/>
      <img class="Areaimg" src="Areaimg.png"/>
      <img class="Bathimg" src = "Bathimg.png"/>
    </div>
    <div class="Review">
      <div class="Boxreview"></div>
      <div class="Reviewamount" >100 reviews</div>
      <div class="GuestsReview" >Guests Review</div>
      <div class="Line9" ></div>
      <div class="Review4" >
        <div class="Reviewdetail4">อยากเลือดอาบว่ะ คิดถึงพี่เบิร์ด อยากไปดูคอน<br/>เสิร์ตพี่เบิร์ดอะม๊า มาแตลอยากดูๆๆๆๆๆๆ</div>
        <div class="Reviewcus4" >มาแตล</div>
      </div>
      <div class="Review3">
        <div class="Reviewdetail3" >มาแตลที่อยู่ข้างห้องหล่อมากเลยค้าบบบบบบบ<br/>fc เลยตามtiktokทุกวันเลย เลิฟๆ</div>
        <div class="Reviewcus3" >Johnwick</div>
      </div>
      <div class="Review2" >
        <div class="Reviewcus2" >Savannah Nguyen</div>
        <div class="Reviewdetail2" >Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. <br/>Exercitation veniam consequat sunt nostrud amet. Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.</div>
      </div>
      <div class="Review1" >
        <div class="Reviewdetail1" >ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</div>
        <div class="Reviewcus1" >Ronald Richards</div>
      </div>
    </div>

  </div>
</body>
</html>

<?php mysqli_close($connection); ?>