<!DOCTYPE html>

<!--
File Name: index.php
Date: 7/30/20
Designer: Barbara Orts
-->

<html lang="en">
<head>
    <title>Ace in the Hole Multisport Events - About us</title>

    <meta charset="utf-8">
    <meta name="author" content="Barbara Orts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ace in the Hole Multisport Events website">

    <link rel="stylesheet" href="../styles/reset.css" type="text/css">
    <link rel="stylesheet/less" href="../styles/navigation.less" type="text/css">
    <link rel="stylesheet/less" href="../styles/forms.less" type="text/css">
    <link rel="stylesheet/less" href="../styles/style.less" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@800&family=Roboto&display=swap"
          rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/galleria.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<header class="header">
    <?php include '../includes/nav.inc.html.php'; ?>

    <div class="hero">
        <img src="../images/hero_about_ace2.jpg" alt="Sally enjoying the 10k race in May 2018 in crutches">
    </div>

</header>

<main>
    <div class="grid_layout">
        <section id="section_one" class="col_one">
            <h2>About us </h2>
            <p>We started back in 1995. A group of friends, enjoying the outdoors and training. After many informal
                races in
                the Portland area, we decided to start Ace in the Hole Multisports Events. We love bringing people
                together
                and we still enjoy the social aspect of the events we put out.
            </p>
        </section>


        <section class="col_two">
            <h2>Our Mission </h2>
            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all
                shapes
                and sizes, national origins, gender identifications and cultural backgrounds. We offer Events for Every
                Body.</p>
        </section>
          </div>

    <section class="social_media_feeds">
        <h2>Follow us!</h2>
        <a class="twitter-timeline social_feed" data-width="450" data-height="320" data-theme="dark"
           href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by Ace in the Hole Multisport Events</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <iframe class="social_feed" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D110944337146713%26id%3D110661963841617&show_text=true&width=552&height=158&appId"
                width="450" height="250" style="overflow:hidden" scrolling="no" frameborder="0"
                allowTransparency="true" allow="encrypted-media"></iframe>
    </section>



    <section class="col_four center_para">
        <h2>Past Events Photo Gallery</h2>

        <div class="galleria">
            <img src="../images/ace4.jpg" alt="Swimmers at a triathlon jumping in the water">
            <img src="../images/ace6.jpg" alt="Winners posing for photos">
            <img src="../images/ace7.jpg" alt="High fives at the last yard towards the finish line">
            <img src="../images/ace9.jpg" alt="Wheelchair participants celebrating a finish">
            <img src="../images/ace10.jpg" alt="the finish line">
            <img src="../images/ace12.jpg" alt="A pack of riders">
            <img src="../images/ace13.jpg" alt="Runners at the start of a race">
            <img src="../images/ace14.jpg" alt="Runners racing on the track">
            <img src="../images/ace16.jpg" alt="Middle of the pack of a race">
            <img src="../images/image3_ace1.jpg" alt="Running to the water">
            <img src="../images/image4_ace3.jpg" alt="A rider celebrating victory">
            <img src="../images/image5_ace5.jpg" alt="Bike riders in a turn">
            <img src="../images/image6_ace17.jpg" alt="Marathoners running">
            <img src="../images/rego_ace11.jpg" alt="Marathoners running photo of legs">
        </div>


        <script>
            (function () {
                Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.6.1/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria');
            }());
        </script>

    </section>

</main>

<?php include '../includes/footer.inc.html.php'; ?>
<script src="../scripts/navigation.js"></script>

</body>
</html>
