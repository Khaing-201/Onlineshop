<?php 
session_start();
        include 'Admin/connect.php';
        include 'functions.php'; 
        $getquery="select * from product";
        $perpage=4;
        $go_query=mysqli_query($connection,$getquery);
        $num=mysqli_num_rows($go_query);
        $num=ceil($num/$perpage); 
        $page=''; //for panigation!
?>
<!DOCTYPE html>
<html lang='en'>
<?php include 'header.php' ?>
<div class='intro' style='height: 100vh;'>
        <div class="phone_menu"><i class="fas fa-bars fa-3x"></i></div>
        <div class="phone_logo">
            <img src="./assets/horus-removebg-preview.png" alt="logo">
        </div>
        <div class="toolbar">
            <div class="sidedraw">
                <div class="phone_logo">
                    <img src="./assets/horus-removebg-preview.png" alt="logo">
                </div>
                <ul>
                    <li>home</li>
                    <li>display</li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="dropbox">

            </div>
        </div>
        <div class='intro_paragraph'>
            <h3 onclick='startHandler()' >Let's start shopping with <span style='color: #0e1c36;'>HORUS</span> </h3>
            <p style='font-size: larger;'>If you haven’t shopped online at <span style='color: #0e1c36;'>HORUS</span>, you’ve seriously been missing out. </p>
        </div>
        <img src='./assets/shopping.svg' class='intro_vector' alt=''>

    </div>
<!-- <head>
    <link rel="icon" href="./assets/Capture-removebg-preview.png" sizes="32x32" type="image/png">
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Acme&family=Bree+Serif&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' integrity='sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp' crossorigin='anonymous'>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='./login/auth.css'>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./display/display.css">
    <script src="./login/auth.js"></script>
    <script src="./footer.js"></script>
    <script src="./login/login.js"></script>
    <title>Clothing</title>

</head>
<body>
    <?php  include('./login/auth.php') ?>
    <input type="hidden" value="./assets/horus-removebg-preview.png" id="login_value">
    <div id="login"></div>
    <div style="position:fixed; height: 100vh; width: 100%;z-index: -1;" class="body"></div>
    <div id='body'>
        <selctor class='selector blank'>
            <div class="logo">
            <img src="./assets/horus-removebg-preview.png" alt="logo">
        </div>
            <ul>
                <li class='liActive' ><a class='active' href='./index.php'>HOME</a></li>
                <li><a href='./display/display.php'>DISPLAY</a></li>
                <li ><a onclick='startHandler()' >LOGIN</a></li>
                <li><a href='./history/history.php' >HISTORY</a></li>
              </ul>
              <div class="search-input">
                <input type="text" placeholder="Search"><button class="search-button"><i class="fas fa-search"></i></button>
                </div>
                <div class="shopping-cart-icon"><a href="./shoppingCart/shoppingCart.php"><i class="fas fa-shopping-cart fa-lg real-icon"></i></a></div>
        </selctor>
    </div>

    <div class='intro' style='height: 100vh;'>
        <div class="phone_menu"><i class="fas fa-bars fa-3x"></i></div>
        <div class="phone_logo">
            <img src="./assets/horus-removebg-preview.png" alt="logo">
        </div>
        <div class="toolbar">
            <div class="sidedraw">
                <div class="phone_logo">
                    <img src="./assets/horus-removebg-preview.png" alt="logo">
                </div>
                <ul>
                    <li>home</li>
                    <li>display</li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="dropbox">

            </div>
        </div>
        <div class='intro_paragraph'>
            <h3 onclick='startHandler()' >Let's start shopping with <span style='color: #0e1c36;'>HORUS</span> </h3>
            <p style='font-size: larger;'>If you haven’t shopped online at <span style='color: #0e1c36;'>HORUS</span>, you’ve seriously been missing out. </p>
        </div>
        <img src='./assets/shopping.svg' class='intro_vector' alt=''>

    </div> -->

    <div id='two' class='clothing_home'>
      
        <h1>Here are the popular clothing</h1>
      
       <div id='zero' class='holder holderEnd'>
        <img src='./assets/black_background.jpg' style='position: absolute;width: 25%;/* padding: 0 20px; */left: 0;height: 100%;' alt=''>
        <div class='clothing_vector'>
            <img src='./assets/jacket_vector-removebg-preview.png' alt=''>
        </div>
        <div class='description'>
            <h1>
                Addidas Jacket
            </h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut fuga minus dolorem sequi neque laborum reiciendis similique nisi voluptas, quisquam minima rem vero debitis cum expedita doloribus adipisci voluptate itaque?
            </p>

        </div>
        </div>
     
    </div>
    <br>
    <br>
    <p id="foot"></p>
    
</body>
<script src='./jquery-3.5.1.min.js'></script>
<script src='./imakewebthings-waypoints-34d9f6d/lib/jquery.waypoints.js'></script>
<script>


    var waypoints = $('#two').waypoint(function() {
      $('.selector').toggleClass('blank').toggleClass('notblank')
      }, {
    offset: '40%'
  })
  var waypoints = $('#zero').waypoint(function() {
      $('.holder').toggleClass('holderEnd').toggleClass('holderStart')
      }, {
    offset: '90%'
  })
    </script>
</html>