<!DOCTYPE html>

<!--
File Name: registration.html.php
Date: 7/22/20
Designer: Barbara Orts
-->

<html lang="en">
<head>
    <title>Ace in the Hole Multisport Events - Registration</title>

    <meta charset="utf-8">
    <meta name="author" content="Barbara Orts">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ace in the Hole Multisport Events registration page">

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

    <section id="section_one" class="col_one">
        <h2>Ready to be part in our event?</h2>
        <p>Complete the Registration form below. Please note that all packet pick up will occur at Why Worry Racing, 123
            NW Everett, Portland OR. Packet pick up hours:
            Thursday 8-5, Friday 9-noon. No day of event packet pick up. Make sure you have reviewed all the information
            in our <a class="inside_link" href="<?php echo BASE_URL; ?>event">Event</a> section.
        </p>

            <ul class="cost">Cost includes:</ul><br>
            <li>Food & Beer</li>
            <li>Access to the weekend's live entertainment & Fitness Expo</li>
            <li>Commemorative Finisher medal</li>
            <li>Accurate Chip Timing for competitive races</li>
            <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
            <li>Post-event party & entertainment</li>
            <br>

            NOTE: Tech shirts guaranteed to pre-registered participants only.

            </ul>

    </section>

    <section class="col_four">
        <h2>Registration Form </h2>
        <p class="center_para">Required fields are marked with an asterisk (*).</p>

         <div id="registrationform">
            <form method="post" action=" ">

                <input type="hidden" name="honeypot" id="honeypot" value="">

                <label for="fullname">* Full Name:</label>
                <input type="text" name="fullname" id="fullname" placeholder="First and last name" required>

                <label for="role">* Registration role:</label>
                <select name="role" id="role" required>
                    <option value="" disabled selected>Choose role</option>
                    <option value="athlete">Athlete</option>
                    <option value="volunteer">Volunteer</option>
                </select>

                <label for="saturday">Select the Saturday event you wish to participate in:</label>
                <select name="saturday" id="saturday">
                    <option value="">Select</option>
                    <option value="None">None</option>
                    <option value="Long Course Triathlon">Long Course Triathlon $240</option>
                    <option value="Olympic Triathlon">Olympic Triathlon $110</option>
                    <option value="10K">10K $50</option>
                    <option value="Half Marathon">Half Marathon $75</option>
                </select>

                <label for="sunday">Select the Saturday event you wish to participate in:</label>
                <select name="sunday" id="sunday">
                    <option value="">Select</option>
                    <option value="None">None</option>
                    <option value="Sprint Triathlon">Sprint Triathlon $90</option>
                    <option value="Try-a-Tri">Try-a-Tri $65</option>
                    <option value="Splash n Dash">Splash n Dash FREE if an adult registers with the child or $25
                    </option>
                </select>

                <label for="age">* Age:</label>
                <input type="text" name="age" id="age" required>

                <label for="gender">* Gender Identification:</label>
                <select name="gender" id="gender" required>
                    <option value="">Select</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Non-binary">Non-binary</option>
                    <option value="Other">Other/Prefer not to say</option>
                </select>

                <label for="email">* Email:</label>
                <input type="email" name="email" id="email" placeholder="Email" required>

                <label for="phone">* Phone:</label>
                <input type="phone" name="phone" id="phone" placeholder="Main contact phone" required>

                <label for="ername">* Emergency Contact:</label>
                <input type="text" name="ername" id="ername" placeholder="Emergency contact" required>

                <label for="erphone">* Emergency Contact Phone Number:</label>
                <input type="tel" name="erphone" id="erphone" placeholder="Emergency contact phone number" required>

                <label for="tshirtsize">* T-Shirt Size:</label>
                <select name="tshirtsize" id="tshirtsize" required>

                    <option value="XSmall">X-Small</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="X-Large">X-Large</option>
                    <option value="XX-Large">XX-Large</option>
                </select>

                <label for="specialreqs">* Special Requests or accommodations:</label>
                <textarea name="specialreqs" id="specialreqs" rows="4" cols="20"></textarea>

                <input id="submit" type="submit" value="Submit">
            </form>
        </div>
    </section>

    <section class="center_para">
        <img class="rego_photo" src="../images/ace12.jpg" alt="bike riders peloton in race"
    </section>


</main>

<?php include '../includes/footer.inc.html.php'; ?>
<script src="../scripts/navigation.js"></script>
</body>
</html>
