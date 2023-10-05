<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="./home.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>  
    <link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"/> 
</head>

<body>
    <!-- PHP code to establish connection with the localserver -->
   

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

    <section id = "banner">
        <div class="banner-text">
        </div>
    </section>

    <!-- welcome -->

    <?php
        session_start();
        $cus_id = $_SESSION['cus_id'];
        $sql = "SELECT * FROM customers where cus_id = '$cus_id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>

    <div>
        <div class = "sec1">
            <div>
                <div class = "welcome">
                    <p style = "color: rgb(0, 0, 0); font-size: 25px; font-weight: bold; align-self: flex-end;">Hello, <?php echo $row['first_name'];?>  <?php echo $row['last_name'];?></p>
                    <p style = "color: rgb(0, 0, 0); font-size: 15px; font-weight: bold; align-self: self-end">Hotel gangnam luna poon</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ค้นหาห้อง -->
    <div>
        <div class="search-bar" style="width: 1405px; height: 140px; background: rgb(216, 217, 226); box-shadow: 20px 20px 120px 15px rgba(0, 0, 0, 0.05); border-radius: 20px">
            <div>
                <h2 style="font-size: 14px;">Type room</h2>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 415px; height: 51px; border-radius: 20px; font-size: 14px; padding: 16px;">
                    <option selected>Open this select type room</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">All</option>
                </select>
            </div>
            <div class="check-in date">
                <h2 style="font-size: 14px;">Check-in date</h2>
                <div class='input-group date' id='picker1'>
                    <input type='text' class="form-control rounded-3xl" placeholder="ex 01/01/2023" style="height: 50px; width: 228;border-top-left-radius:20px;border-bottom-left-radius:20px ;"/>
                    <span class="input-group-addon" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                        <span class="glyphicon glyphicon-calendar"></span>	                
                    </span>     
                </div>
            </div>

            <div class="check-out date">
                <h2 style="font-size: 14px;">Check-out date</h2>
                <div class='input-group date' id='picker2'>
                    <input type='text' class="form-control" placeholder="ex 05/01/2023" style="height: 50px; width: 228;border-top-left-radius:20px;border-bottom-left-radius:20px ;"/>
                    <span class="input-group-addon" style="border-top-right-radius: 20px;border-bottom-right-radius: 20px;">
                        <span class="glyphicon glyphicon-calendar"></span>	                
                    </span>
                </div>
            </div>

            <div class="input_guest">
                <h2 style="font-size: 14px;">Number of guests</h2>
                <input type="number" id="typeNumber" class="form-control" min="0" placeholder="ex 3" style="height: 50px; width: 228;border-top-left-radius:20px;border-bottom-left-radius:20px ;"/>
            </div>

            <a href="search.html">
                <button type="button" class="btn btn-outline-success" id = "sreach-btn" style="width: 168px; height: 51px; border-radius: 20px;">Search</button>
            </a>
              
        </div>
    </div>

        <!-- สิ่งที่จะได้รับ -->
    <section class="container" style="margin-bottom: 60px;">
        <div>
            <h3>Now you will get back</h3>
        </div>

        <div class = "row-items">
            <div class="container-box">
                <div class="container-img">
                    <img src="icon/sunbed_3126507 (1).png" alt="">
                </div>
                <h4>sunbed</h4>
                <p>150 prodfsfpds</p>
            </div>

            <div class="container-box">
                <div class="container-img">
                    <img src="icon/icons8-feeling-67.png" alt="">
                </div>
                <h4>sunbed</h4>
                <p>150 prodfsfpds</p>
            </div>

            <div class="container-box">
                <div class="container-img">
                    <img src="icon/home-insurance_2024266.png" alt="">
                </div>
                <h4>sunbed</h4>
                <p>150 prodfsfpds</p>
            </div>

            <div class="container-box">
                <div class="container-img">
                    <img src="icon/costumer_6012670.png" alt="">
                </div>
                <h4>sunbed</h4>
                <p>150 prodfsfpds</p>
            </div>
        </div>
    </section>

    <!-- all room
    <div class="row">
        <div class="col-md-12">
            <div class="panel with-nav-tabs panel-default panel-spacing">
                <div class="panel-heading">
                        <ul class="nav nav-tabs custom-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">ALL ROOMS</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content"> -->
                        <!-- ประเภท standard -->
                        <!-- <div class="tab-pane fade in active" id="tab1default"> -->

                        <!-- <?php
                        for($i = 0; $i < 20; $i++){
                        echo '
                            <div class="single-person">
                                <center><img class="img-responsive" id="img_room" src="standard/standed.webp   " /></center>
                                <h4>Name</h4>
                                <h5>Experience</h5>
                                <hr>
                                <span class="title">guest</span> <span>5</span>
                                <hr>
                                <span class="title">Location</span> <span class="pull-right">India</span>
                                <hr>
                                <span class="title">Job success</span> <span class="pull-right">100%</span>
                                <hr class="job-success">
                                <hr>
                            </div>
                        ';
                        }
                        ?> -->
                            <!-- <div class="single-person">
                                <center><img class="img-responsive" id="img_room" src="standard/standed.webp   " /></center>
                                <h4>Name</h4>
                                <h5>Experience</h5>
                                <hr>
                                <span class="title">guest</span> <span>5</span>
                                <hr>
                                <span class="title">Location</span> <span class="pull-right">India</span>
                                <hr>
                                <span class="title">Job success</span> <span class="pull-right">100%</span>
                                <hr class="job-success">
                                <hr>
                            </div>
                            <div class="single-person">
                                <center><img class="img-responsive" id="img_room" src="standard/s_room2.webp" /></center>
                                <h4>Name</h4>
                                <h5>Experience</h5>
                                <hr>
                                <span class="title">guest</span>
                                <hr>
                                <span class="title">Location</span> <span class="pull-right">India</span>
                                <hr>
                                <span class="title">Job success</span> <span class="pull-right">100%</span>
                                <hr class="job-success">
                                <hr>
                            </div>
                            <div class="single-person">
                                <center><img class="img-responsive" id="img_room" src="standard/s_room3.jpg" /></center>
                                <h4>Name</h4>
                                <h5>Experience</h5>
                                <hr>
                                <span class="title">guest</span>
                                <hr>
                                <span class="title">Location</span> <span class="pull-right">India</span>
                                <hr>
                                <span class="title">Job success</span> <span class="pull-right">100%</span>
                                <hr class="job-success">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ละเอียดรายของโรงเเรม -->
    <div class = "rectangle1">
        <div>
            <img class = "main-resort" src="resort/main_hotal.png" alt="">
        </div>
        <div class = "des-main">
                <p style="font-size: 20px;">Hotel gangnam luna poon</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eaque amet ab cupiditate saepe, qui quam sed culpa nesciunt numquam molestiae architecto itaque enim voluptatem vel illum quia tenetur temporibus.</p>
        </div>
    </div>

    <!-- บรรยายกาศรอบ -->
        <div class = "des">
        <h2 class = "des-text">
            Destination
        </h2>

        <div class = "des-img">
            <img src="places/img1.png" class="des-img1">
            <div class = "des-group">
                <img src="places/img2.png" alt="" class="des-img2">
                <img src="places/img3.png" alt="" class="des-img2">
            </div>
        </div>
    </div>

    <!-- ส่วนของ acticity -->
    <div class="act">
        <div class= "img.act">
            <section id="slider-section">
              <div class="container">
                <div class="subcontainer">
                  <div class="slider-wrapper">
                    <br>
                    <h1>Acticity</h1>
                    <p>every day</p>
                    <div class="slider"></div>
                    <div id="controls">
                      <button class="previous"><i class="fas fa-angle-left"></i></button>
                      <button class="next"><i class="fas fa-angle-right"></i></button>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
    </div>

    <!-- ปิดให้สวย -->
    <div class="rectangle2"></div>

    <script>
        $(function() {              
           $('#picker1').datetimepicker({
                 format: 'DD/MM/YYYY'
           });
        });
        $(function() {              
           $('#picker2').datetimepicker({
                 format: 'DD/MM/YYYY'
           });
        }); 


        const slider = document.querySelector(".slider");
        // I highly recommend downloading and resizing the images to avoid them slowing down your website!
        const carsObject = [
        {
            "img": "https://cms-cdn.travellink.com.au/volumes/cccsyd/images/1-Test-Images-only/_bannerMobile/se-whale-breach_large.jpg?v=1684210714",
            "model" : "Whale Watching",
            "type" : "25 member"
        },
        {
            "img": "https://www.barefootresortrentals.com/wp-content/uploads/2020/09/Top-3-Places-to-Go-Parasailing-in-North-Myrtle-Beach.jpg",
            "model" : "Parasailing",
            "type" : "5 member"
        },
        {
            "img": "https://www.usatoday.com/gcdn/-mm-/47af204a6e11834e04ead0bfb302d86e42f2df6c/c=0-94-1800-1109/local/-/media/USATODAY/USATODAY/2014/04/14//1397496864000-XXX-Travel-Travel-Mexico-15620.JPG?width=1800&height=1015&fit=crop&format=pjpg&auto=webp",
            "model" : "Kayak",
            "type" : "10 member"
        },
        {
            "img": "https://nwscdn.com/media/wysiwyg/3kf/Blue2.jpg",
            "model" : "Paddle Board",
            "type" : "10 member"
        }
        ];

        window.addEventListener("load", initializeSlider());

        function initializeSlider(){
        let cars = "";
        for(let car in carsObject){
            cars += `<div class="slide">
                    <img src="${carsObject[car].img}"
                        alt="image">
                    <br><br>
                    <div>
                        <h3>${carsObject[car].model}</h3>
                        <p>${carsObject[car].type}</p>
                    </div>
                    </div>`
        }
        slider.innerHTML = cars;
        }

        const tnslider = tns({
        container: '.slider',
        autoWidth:true,
        gutter: 15,
        slideBy: 1,
        nav: true,
        speed: 400,
        controlsContainer: '#controls',
        prevButton: '.previous',
        nextButton: '.next'
        });
     </script>
</body>
</html>

<?php mysqli_close($con)?>