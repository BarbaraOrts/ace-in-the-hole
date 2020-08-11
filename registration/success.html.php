<!DOCTYPE html>

<!--
File Name: success.html.php
Date: 7/29/20
Author: Barbara Orts
-->

<html lang="en">
<head>
    <title>Ace in the Hole Multisport Events</title>

    <meta charset="utf-8">
    <meta name="author" content="Barbara Orts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ace in the Hole Multisport Events">

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
        <h2>Success!</h2>
        <p>Your registration has been submitted. Happy Training and we will see you at the start line!
        </p>
        <p> Events registered for:<br>
            Saturday: <?php echo htmlspecialchars($saturday, ENT_QUOTES, 'UTF-8'); ?><br>
            Sunday: <?php echo htmlspecialchars($sunday, ENT_QUOTES, 'UTF-8'); ?>
        </p>
        <p>
            Name: <?php echo htmlspecialchars($fullname, ENT_QUOTES, 'UTF-8'); ?><br>
            Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
            DOB: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
            Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
            Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
            Phone: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?><br>
            Emergency Contact: <?php echo htmlspecialchars($ername, ENT_QUOTES, 'UTF-8'); ?><br>
            Emergency Contact phone: <?php echo htmlspecialchars($erphone, ENT_QUOTES, 'UTF-8'); ?><br>
            T-shirt Size requested: <?php echo htmlspecialchars($tshirtsize, ENT_QUOTES, 'UTF-8'); ?><br>
            Special Requests: <?php echo htmlspecialchars($specialreqs, ENT_QUOTES, 'UTF-8'); ?><br>
        </p>
    </section>

</main>

<?php include '../includes/footer.inc.html.php'; ?>
<script src="../scripts/navigation.js"></script>
</body>
</html>
