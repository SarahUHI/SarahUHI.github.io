<html lang="en-gb">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bike King Borders</title>
    <link rel="shortcut icon" type="image/jpg" href="../images/logo-noText.png" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

    <!-- Header start-->
    <header class="topHeader">
        <div class="logo">
            <img src="../images/logo-noText.png" alt="Bike King Borders Logo">
        </div>
        <div class="bizName">
            <h1>Bike King Borders</h1>
            <a href="https://facebook.com"><img src="../images/f_logo_RGB-Blue_58.png" height="30" alt="Facebook link" /></a>
            <a href="https://youtube.com"><img src="../images/yt_icon_rgb.png" height="30" alt="YouTube link" /></a>
            <a href="https://instagram.com"><img src="../images/glyph-logo_May2016.png" height="30" alt="Instagram link" /></a>
        </div>
        <div class="address">
            <p>
                23 Grange Terrace<br />
                EH26 EB3<br />
                Tel: 07754 960 443<br />
                Email: <a class="eMail" href=mailto:info@bikekingborders.co.uk>info@bikekingborders.co.uk</a>
            </p>
        </div>
    </header>
    <!-- Header end-->
    <!-- Navigation start-->

    <nav>
        <a class="homeLink" href="../index.html">Home</a>
        <a class="aboutLink" href="../html/aboutUs.html">About Us</a>
        <a class="bikeLink" href="../html/ourBikes.html">Our Bikes</a>
        <a class="priceLink" href="../html/hirePricing.html">Hire Pricing</a>
        <a class="servLink" href="../html/servicePricing.html">Service Pricing</a>
        <a class="newsLink" href="../html/newsletter.html">Newsletter</a>
    </nav>

    <!-- Body start-->

    <div class="frontCopy">
        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?>
    </div>

    <!-- Body end-->
    <!-- Footer start-->
    <footer>
    </footer>
    <!-- Footer end-->
</body>
</html>