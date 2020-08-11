<!DOCTYPE html>

<!--
File Name: contact.html.php
Date: 7/22/20
Designer: Barbara Orts
-->

<html lang="en">
<head>
    <title>Ace in the Hole Multisport Events - Contact</title>

    <meta charset="utf-8">
    <meta name="author" content="Barbara Orts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ace in the Hole Multisport Events contact page">

    <link rel="stylesheet" href="../styles/reset.css" type="text/css">
    <link rel="stylesheet/less" href="../styles/navigation.less" type="text/css">
    <link rel="stylesheet/less" href="../styles/forms.less" type="text/css">
    <link rel="stylesheet/less" href="../styles/style.less" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@800&family=Roboto&display=swap"
          rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


</head>

<body>

<header class="header">
    <?php include '../includes/nav.inc.html.php'; ?>
</header>

<main>

    <section id="section_one" class="col_one contact_para">
        <h2>Office location</h2>
        <p class="center_para">2111 NW Savier St<br>
        Portland, OR 97210</p>
        <p><a class="inside_link" href="tel:503-555-555">Ph:503-555-555</a></p>
    <div class="map-responsive">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.760909571732!2d-122.69712308444022!3d45.53501667910191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549509e47d89f655%3A0x5d229b4d2991e1e4!2s2111%20NW%20Savier%20St%2C%20Portland%2C%20OR%2097210!5e0!3m2!1sen!2sus!4v1596394872084!5m2!1sen!2sus"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    </section>

    <section class="col_four">
        <h2>Questions or comments?</h2>
        <p class="center_para">Complete the form below or send us an email directly to <a class="inside_link" href="mailto:aith@multisportevents.com">aith@multisportevents.com</a></p>
        <div id="contactform">
            <form method="post" action=" ">


                <label for="fullname">* Full Name:</label>
                <input type="text" name="fullname" id="fullname" placeholder="First and last name" required>

                <label for="role">* Registration role:</label>
                <select name="role" id="role" required>
                    <option value="" disabled selected>Choose role</option>
                    <option value="interested party">Interested party</option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                </select>

                <label for="email">* Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" required>

                <label for="comments">* Questions/Comments:</label>
                <textarea rows="10" cols="50" name="comments" id="comments"></textarea>

                <input id="submit" type="submit" value="Submit">
            </form>
        </div>

    </section>




</main>

<?php include '../includes/footer.inc.html.php'; ?>
<script src="../scripts/navigation.js"></script>
</body>
</html>
