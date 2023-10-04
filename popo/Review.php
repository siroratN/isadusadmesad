``<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="Reviewstyle.css">
</head>
<body>
<!-- แถบ navigate bar -->
    <header>
        <h2 class="logo">logo</h2>
        <nav class="navigation">
            <button class="btnProfile-popup">Profile</button>
        </nav>
    </header>
<!-- กรอบ Login และ Register -->
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="form-box register">
            <h2>Review</h2>
             <form action="connectreview.php" method="POST">
                <div class="ID">
                    <p>Name : Serapat rattanapachai</p>
                    <br>
                    <p>Booking ID : 65070282</p>
                    <br>
                    <p>Room : 707</p>
                </div>
                <div class="input-box">
                </div>
                <div class="genderchoice">
                    <div class="gender">
                        <label>Rating</label>
                    </div>
                    <div class="genderradio">
                        <input type="radio" id="genderChoice1" name="rating" value="1" />
                        <label for="contactChoice1">1</label>
                
                        <input type="radio" id="genderChoice2" name="rating" value="2" />
                        <label for="contactChoice2">2</label>
                
                        <input type="radio" id="genderChoice3" name="rating" value="3" />
                        <label for="contactChoice3">3</label>

                        <input type="radio" id="genderChoice4" name="rating" value="4" />
                        <label for="contactChoice4">4</label>

                        <input type="radio" id="genderChoice5" name="rating" value="5" />
                        <label for="contactChoice5">5</label>
                    </div>
                    <div class="input-box">
                        <textarea placeholder="Type something here..." name="review" id="reviewarea" cols="50" rows="200"></textarea>
                    </div>
                </div>
                <div class="input-box">
                    <label></label>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>