<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" />

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
<link rel="stylesheet" href="css/animate.css" />

<link rel="stylesheet" href="css/owl.carousel.min.css" />
<link rel="stylesheet" href="css/owl.theme.default.min.css" />
<link rel="stylesheet" href="css/magnific-popup.css" />

<link rel="stylesheet" href="css/aos.css" />

<link rel="stylesheet" href="css/ionicons.min.css" />

<link rel="stylesheet" href="css/bootstrap-datepicker.css" />
<link rel="stylesheet" href="css/jquery.timepicker.css" />

<link rel="stylesheet" href="css/flaticon.css" />
<link rel="stylesheet" href="css/icomoon.css" />
<link rel="stylesheet" href="css/style.css" />
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">Jazz<small>Beans</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="index.html/#about" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="./shop.html" class="nav-link">Shop</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li><?php
                session_start();

                if (isset($_SESSION["id"])) { ?>
            <li class="nav-item">
              <a href="./profile.php?id=<?php echo $_SESSION["id"][0]; ?>" class="nav-link">Profile</a>
            </li>
          <?php } else { ?>

            <li class="nav-item">
              <a href="register/register.html" class="nav-link">Login</a>
            </li>

          <?php }


          ?>

          <li class="nav-item cart">
            <a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center">
                <!-- <small>number of items in cart</small> -->
              </span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>