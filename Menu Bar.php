<?php
session_start();
$eid = $_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<!--Menu Bar Close Here-->
<style>
      .logo {
    width: 12vh;
    height: 12vh;
  }
  .navbar-inverse{
        background-color: #4D5656;
  
  }
  .nav-item{
       font-size: 20px;
  }

</style>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <ul class="nav navbar-nav">
                 <img class="logo" src="image/Wilow lake.jpg" alt="Wilow Lake">
                <li><a  class= "me-3"href="index.php"title="Home"></a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class= "me-3" href="index.php"title="Home">Home</a></li>
                <li class="nav-item"><a class= "me-3" href="image gallery.php"title="Gallery">Gallery </a></li>
                <li class="nav-item"><a  class= "me-3" href="about.php"title="About">About </a></li>
                <li class="nav-item"><a  class= "me-3" href="contact.php"title="Contact">Contact </a></li>
               
                
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="nav-item" ><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

                <?php
                if ($_SESSION['create_account_logged_in'] != "") {
                    ?>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="order.php">Booking Status</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?PHP
                } else {
                    ?>
                    <li class="nav-item"><a href="Login.php"title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
                    </li>
                    <?php }
                ?>
            </ul>
        </div>
    </div>
</nav>   

<!--Menu Bar Close Here-->
