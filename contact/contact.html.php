<!DOCTYPE html>

<!--
File Name: contact.html.php
Date: 7/22/20
Author: Barbara Orts
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
    <link rel="stylesheet/less" href="../styles/style.less" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@800&family=Roboto&display=swap"
          rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->


</head>

<body>

<header class="header">
    <?php include '../includes/nav.inc.html.php'; ?>
</header>

<main>

    <section id="section_one" class="col_one">
        <h2>Questions or comments?</h2>
        <p>Complete the form below or send us an email directly to <a href="mailto:aith@multisportevents.com">aith@multisportevents.com</a>
        </p>
    </section>

    <section class="col_four">
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
                <textarea rows="10" cols="50" name="comments" id="comments" ></textarea>

                <input id="submit" type="submit" value="Submit">
            </form>
        </div>
    </section>


</main>

<?php include '../includes/footer.inc.html.php'; ?>
<script src="../scripts/navigation.js"></script>
</body>
</html>
