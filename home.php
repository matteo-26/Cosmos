<!DOCTYPE html PUBLIC>
<!--<html xmlns="https://cosmosarchitecture.com/XHTML">-->
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Homepage - Cosmos Architecture</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="?family=https://fonts.googleapis.com/cssPoppins:wght@100;200;300;400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    

     <link rel="icon" type="image/x-icon" href="images/favicon.ico">

</head>
<header>

  <?php include 'functions/getMenuItems.php'; ?>
  <?php include 'functions/getSocialMediaLinks.php'; ?>

    <section class="head">
      <div class="social">



          <ul>
              <li><a href='<?php echo getSocialMediaLink("instagram", "files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                      style="width: 20px; height: 20px; "
                                                                                                                      src="dashboard/icons/instagram-logo.png"></a>
              </li>
              <li><a href='<?php echo getSocialMediaLink("twitter", "files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                    style="width: 20px; height: 20px; "
                                                                                                                    src="dashboard/icons/twitter-logo.png"></a>
              </li>
              <li><a href='<?php echo getSocialMediaLink("facebook", "files/social-media-links.txt"); ?>' target="
                "><img alt
                                                                                                                     style="width:20px; height: 20px;"
                                                                                                                     src="dashboard/icons/facebook-logo.png"></a>
              </li>
              <li><a href='<?php echo getSocialMediaLink("linkedin", "files/social-media-links.txt"); ?>' target="_blank"><img alt
                                                                                                                     style="width: 20px; height: 20px; "
                                                                                                                     src="dashboard/icons/linkedin-logo.png"></a>
              </li>
            </ul>

      </div>

      <div class="lingue">
  <!-- Menù orizzontale per schermi più grandi -->
  <ul class="lingue-horizontal">
    <li><a href="#" >EN</a></li>
    <li><a href="home-esp.php" class="no-active">ES</a></li>
    <li><a href="home-it.php" class="no-active">IT</a></li>
    <li><a href="home-ch.php" class="no-active">CH</a></li>
    <li><a href="home-ar.php" class="no-active">AR</a></li>
  </ul>

  <!-- Menù a tendina per dispositivi mobili -->
  <div class="lingue-dropdown">
    <select onchange="window.location.href = this.value;">
      <option value="#">Select Language</option>
      <option value="#">EN</option>
      <option value="home-esp.php">ES</option>
      <option value="home-it.php">IT</option>
      <option value="home-ch.php">CH</option>
      <option value="home-ar.php">AR</option>
    </select>
  </div>
</div>


    </section>




    <a href="#"><img style="height: 10vh; width: auto" src="dashboard/icons/logo.png"


                                                                                              class="logo"></a>
    <div class="menu">
      <nav>
          <div class="nav-lns" id="navLinks">
              <i class="fa fa-times" onclick="hideMenu()"></i>
              <ul>
                  <li><a href="php/project.php"><?php echo getMenuItems("1", "files/menu-items.txt") ?></a></li>

                  <li><a href="php/en/estudio-en.php"><?php echo getMenuItems("2", "files/menu-items.txt") ?></a>
                  </li>
                  <li><a href="php/contacto.php"><?php echo getMenuItems("3", "files/menu-items.txt") ?></a></li>
              </ul>
          </div>
          <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
    </div>


</header>



<body>

<div id="cont">

    <?php
    foreach (glob('images/img-home/*.jpg') as $filename) {
        $p = pathinfo($filename);
        ?>
    <section class="sec"
             style='background: url("<?php echo "images/img-home/" . $p["filename"] . "." . $p["extension"]; ?>"); background-size: cover;
                     background-position: center;'>
        <nav>
            <div class="nav-progetto1">
                <ul>
                    <li><a href="https://<?php echo str_replace('ÜÜ', '/', $p['filename']) ?>"
                           class="hero-btn">PROJECT</a></li>
                </ul>
            </div>
        </nav>
        </section><?php
    }
    ?>

</div>
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.left = "0";
    }

    function hideMenu() {
        navLinks.style.left = "-200px";
    }
</script>

<div class="footer-basic" style="margin-top: 0 !important">
    <footer>

        <div style="text-align: center; margin-bottom: 29px">
            <img style="height: 10vh; width: auto" src="dashboard/icons/logo.png" alt="company logo">
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="php/en/terms-of-use-en.php" target="_blank">Terms of use</a></li>
            <li class="list-inline-item"><a href="php/en/privacy-cookie-policy-en.php" target="_blank">Privacy & Cookies Policy</a></li>
            <li class="list-inline-item"><a href="php/en/credits-en.php" target="_blank">Credits</a></li>
            <li class="list-inline-item"><a href="php/en/all-rights-reserved-en.php" target="_blank">All Rights Reserved</a></li>
        </ul>
    </footer>
</div>

</body>
</html>
