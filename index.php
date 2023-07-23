<?php
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head><!--Head Open  Here-->
        <title>Hotel Wilow Lake</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a59b010e18.js" crossorigin="anonymous"></script>
        <link href="css/style.css"rel="stylesheet"/>
        <link href="css/common.css"rel="stylesheet"/>
        
        <style>
            .insert-text {
                margin-top: -800px;
                z-index: 3;
                position: absolute;



            }

            .availability-form {
                margin-top: -500px;
                z-index: 3;
                position: relative;
                margin-right: 5px;
            }


            @media screen and (max-width:575px) {
                .availability-form {
                    margin-top: 30px;
                    padding: 0 40px;

                }
            }
            .swiper {
                width: 700vh;
                height: 150vh;
            }

            .swiper-slide {
                background-position: center;
                background-size: cover;


            }
              .img-swiper {
    width: 250vh;
    height: 90vh;
    display: block;
  
  
  }
  
        </style>
    </head> <!--Head Open  Here-->
    <body>
        <?php
        include('Menu Bar.php')
        ?>
        <div class="container-fluid px-lg-0 mt-0">
            <div class="swiper swiper-container ">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <img class="img-swiper " src="image/hotelfontend.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-swiper " src="image/loung.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-swiper  " src="image/Lakefront.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img class="img-swiper  " src="image/outdoor.jpg" />
                    </div>
                </div>
            </div>
        </div>
        <div class="container insert-text ">
            <h4 class="text-center mb-4"> WELCOME TO THE HOTEL WILOW LAKE</h4>
        </div>

        <!--Indicators Close Here-->

        <!-- Wrapper for slides -->



        <div class="container-fluid"id="red"><!--Id Is Red--> 
            <div class="container text-center">    
                <h1>Welcome To Luxury Hotel</b></h1><hr><br>
                <div class="row">
                    <div class="hov"><!--Hov is Class-->


                        <?php
                        $sql = mysqli_query($con, "select * from rooms");
                        while ($r_res = mysqli_fetch_assoc($sql)) {
                            ?>
                            <div class="col-sm-4">
                                <img src="image/rooms/<?php echo $r_res['image']; ?>"class="img-responsive thumbnail"alt="Image"id="img1"> <!--Id Is Img-->
                                <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
                                <p class="text-justify"><?php echo substr($r_res['details'], 0, 100); ?></p><br>
                                <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include('Footer.php')
        ?>

        
           <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <?php include('script.php') ?>
        <script>
            var swiper = new Swiper(".swiper-container", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 3600,
                    disableOnInteraction: false,
                }
            });
        </script>
    </body>
</html>
