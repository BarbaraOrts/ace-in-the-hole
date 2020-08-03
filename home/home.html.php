<!DOCTYPE html>

<!--
File Name: home.html.php
Date: 7/10/20
Author: Barbara Orts
-->

<html lang="en">
<head>
    <title>Ace in the Hole Multisport Events</title>

    <meta charset="utf-8">
    <meta name="author" content="Barbara Orts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ace in the Hole Multisport Events website">

    <link rel="stylesheet" href="styles/reset.css" type="text/css">
    <link rel="stylesheet/less" href="styles/navigation.less" type="text/css">
    <link rel="stylesheet/less" href="styles/forms.less" type="text/css">
    <link rel="stylesheet/less" href="styles/style.less" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@800&family=Roboto&display=swap"
          rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<header class="header">
    <?php include 'includes/nav.inc.html.php'; ?>

    <div class="hero">
        <img src="images/ace4.jpg" alt="Swimmers at a triathlon jumping in the water">
    </div>

</header>

<main>

    <section id="section_one" class="col_one">
        <h2>September 11th and 12th, 2020</h2>
        <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running
            community. It has become a traditional destination race for athletes from across the nation.

            There is something for every level of athletic ability. The weekend includes a first timer triathlon, a
            sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race
            or come to compete to win, but make sure you come to have fun!</p>

        <a href="<?php echo BASE_URL; ?>registration" class="rego_button">Registrations are still open!</a>
    </section>

    <section class="col_two center_para">

        <h2>Weather Forecast</h2>
        <p>
            <?php include 'includes/weather.inc.html.php'; ?>
        </p>
    </section>

    <section class="col_three home_box">
        <h2>Starting times </h2>

        <ul class="start">
            <li>Saturday</li>
                <ul class="start_times">
                    <li>Long Course Triathlon: 7:00 AM</li>
                    <li>Olympic Triathlon: 7:30 AM</li>
                    <li>10K: 7:15 AM</li>
                    <li>Half Marathon: 7:15 AM</li>
                </ul><br>

            <li>Sunday</li>
                <ul class="start_times">
                    <li>Sprint Triathlon: 8:00 AM</li>
                    <li>Try-a-Tri: 8:20 AM</li>
                    <li>Splash n Dash: 12:00 PM</li>
                </ul>
        </ul>

    </section>

    <section class="col_four">
        <h2>We share a passion for running, swimming and biking!</h2>
        <div class="photoGallery">
            <img class="image1" src="images/running1.jpg" alt="Runner legs">
            <img class="image2" src="images/running2.jpg" alt="A person running in the late afternoon">
            <img class="image3" src="images/ace20.jpg" alt="A marathon runner happy in the mountains">
            <img class="image4" src="images/ace16.jpg" alt="Middle of the pack of a race">
            <img class="image5" src="images/contact_ace18.jpg" alt="A highway full of runners">
            <img class="image6" src="images/ace10.jpg" alt="The finish line">
        </div>
    </section>

</main>

<?php include 'includes/footer.inc.html.php'; ?>
<script src="scripts/navigation.js"></script>
</body>
</html>