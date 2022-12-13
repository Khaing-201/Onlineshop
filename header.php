<head>
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
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
<script type="text/javascript" src="style/bootstrap.js"></script>
<script type="text/javascript" src="style/jquery.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <title>Clothing</title>

</head>
<body>
    <?php  //include('./login/auth.php') ?>
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
                <li><a href='./display.php'>DISPLAY</a></li>
                <?php if(empty($_SESSION['user'])): ?>
                     <li ><a href='./login.php' >LOGIN</a></li>

                <?php else: ?>
                    <li><a href="logout.php">Logout</a></li>
                    <li>Welcome <b><?php echo ucwords($_SESSION['user'])?></b></li>
                <?php endif; ?>
              </ul>
              <form action="search.php" method="post">

              <div class="search-input">
                <input name="search" type="text" placeholder="Search"><button name="submit" class="search-button"  type="submit"><i class="fas fa-search"></i></button>
              </div>
              </form>
                <div class="shopping-cart-icon"><a href="cart.php"><i class="fas fa-shopping-cart fa-lg real-icon"></i></a></div>
        </selctor>
    </div>

    