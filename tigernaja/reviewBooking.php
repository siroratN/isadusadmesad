<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="reviewBooking1.css" />
    
</head>

<body>
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
  <form action="payment.php" method='POST'>
  <div class="ReviewBooking1" >
    <div class="Reviewbookgroup" >
      
        <!-- <div class="ProceedToPayment" >PROCEED TO PAYMENT</div> -->
      <div class="Reviewbox"></div>
      <input class="Button" type="submit" value="PROCEED TO PAYMENT" ></input>
      <div class="Input" >
        <div class="Guestsgroup" >
          <div class="Guests" >Guests</div>
          <input class="Guestsinput" type = "text" id = ""name ="guest" ></input>
        </div>
        <div class="Checkoutgroup" >
          <div class="CheckOut" style="width: 145px; height: 24.87px; left: -0px; top: 18.65px; position: absolute"><span style="color: rgba(0, 0, 0, 0.80); font-size: 23px; font-family: Abhaya Libre; font-weight: 400; line-height: 12px; word-wrap: break-word">Check-out</span><span style="color: rgba(0, 0, 0, 0.80); font-size: 23px; font-family: Be Vietnam Pro; font-weight: 400; line-height: 12px; word-wrap: break-word"> </span></div>
          <input class="Boxicheckout" type = "date"></input>
        </div>
        <div class="Checkingroup" >
          <div class="CheckIn" style="width: 120px; height: 24.87px; left: -0px; top: 18.65px; position: absolute"><span style="color: rgba(0, 0, 0, 0.80); font-size: 23px; font-family: Abhaya Libre; font-weight: 400; line-height: 12px; word-wrap: break-word">Check-in</span><span style="color: rgba(0, 0, 0, 0.80); font-size: 23px; font-family: Be Vietnam Pro; font-weight: 400; line-height: 12px; word-wrap: break-word"> </span></div>
          <input class="Boxcheckin"type= "date" ></input>
        </div>
      </div>
      <div class="PersonalInfor" >
        <div class="Phonenumbergroup" >
          <div class="PhoneNumber" >Phone Number :</div>
          <div class="Phonenumberper" >0936667842</div>
        </div>
        <div class="Emailgroup" >
          <div class="Email" >Email :</div>
          <div class="Emailper" >65070214@kmitl.ac.th</div>
        </div>
        <div class="Gentergroup" >
          <div class="Genter" >Genter :</div>
          <div class="Genterper" >Man</div>
        </div>
        <div class="Lastnamegroup" >
          <div class="LastName" >Last Name :</div>
          <div class="Lastnameper" >Rattanakosin</div>
        </div>
        <div class="Firstnamegroup" >
          <div class="FirstName" >First Name :</div>
          <div class="Firstnameper" >Serapat</div>
        </div>
      </div>
      <div class="ReviewBooking" >REVIEW BOOKING</div>
    </div>
    <!-- <div class="Topbar" >
      <div class="Rectangle" ></div>
      <div class="Topbardetail" >
        <div class="Charity" >CHARITY</div>
        <div class="Blog" >BLOG</div>
        <div class="AboutUs" >ABOUT US</div>
        <div class="CreateAccount" >CREATE-ACCOUNT</div>
        <div class="SignIn" >SIGN-IN</div>
        <div class="Hotel" >HOTEL</div>
      </div>
    </div> -->
    <div class="Activitygroup" >
      <img class="Actvitybg"  src="activitybg.png" />
      <div class="Act3group" >
        <div class="Dayact3" >
          <div class="Data3" >
            <div class="Date3" style >
              
              <div class="MonthDay3" >Mon 05/12</div>
            </div>
            <div class="Line3" ></div>
            <div class="Hour3" >
              <div class="time3" >10:00</div>
            </div>
          </div>
        </div>
        <div class="actname1" >Ride a horse</div>
      </div>
      <div class="Act2group" >
        <div class="Dayact2" >
          <div class="Data2" >
            <div class="Date2" >
              
              <div class="MonthDay2" >Mon 05/12</div>
            </div>
            <div class="Line2" ></div>
            <div class="Hour2" >
              <div class="time2" >10:00</div>
            </div>
          </div>
        </div>
        <div class="Activity2" >Kayaking</div>
      </div>
      <div class="Act1group" >
        <div class="Dayact1" >
          <div class="Data1" >
            <div class="Date1" >
              
              <div class="MonthDay1" >Mon 05/12</div>
            </div>
            <div class="Line1" ></div>
            <div class="Hour1" >
              <div class="time1" >10:00</div>
            </div>
          </div>
        </div>
        <div class="Actvity1" >Scuba diving</div>
      </div>
      <div class="Activity" >ACTIVITY</div>
      
    </div>
    <div class="Typeroomgroup" >
      <img class="Roombg"  src="roombg.png" />
      <div class="Detailroom" >
        <div class="Boxdetail" ></div>
        <div class="BathNight" ><br/><br/>999 bath / night </div>
        <div class="Typeroomdata" >STANDARD ROOM </div>
      </div>
      <img class="room"  src="roomreview.png" />
      <div class="TypeRoom" >TYPE ROOM</div>
    </div>
  </div>
</body>
</html>