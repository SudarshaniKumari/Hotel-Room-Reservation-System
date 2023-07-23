<?php
include('connection.php');
extract($_REQUEST);
if (isset($send)) {
    mysqli_query($con, "insert into feedback values('','$n','$e','$mob','$msg')");
    $msg = "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>About</h6>
                        <p class="text-justify">Wilow Lake is hotel situated in Kurunegala.27 miles from Kandy Royal Botanic Gardens and 27
                            miles from Kandy City Center.</p>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Quick Links</h6>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="rooms.php">Rooms</a></li>
                            <li><a href="facilities.php">Facilities</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                            <li><a href="about.php">About</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Contact Us</h6>
                        <ul class="footer-links">
                            <i class="fa-solid fa-location-dot mr-3"></i> 208 S Lake Rd,<br>Mawathagama, <br>Kurunegala.<br>
                            <i class="fa-solid fa-phone mr-3"></i> 077 759 6666<br>
                            <i class="fa-solid fa-envelope mr-3"></i>
                            <a href="#"> wilowlake@gmail.com</a><br>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by SKdeveloper
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li> 

                        </ul>
                    </div>
                </div>
            </div>
        </footer>
<!--Footer1 Close Here-->

<!--Footer2 start Here-->

<footer class="container-fluid text-center"style="background-color:#26272b;height:40px;padding-top:10px;color:#f0f0f0;">
    <p id="demo"></p>

    <script>
        const d = new Date();
        document.getElementById("demo").innerHTML = d;
    </script>
</footer>

<!--Footer2 start Here-->