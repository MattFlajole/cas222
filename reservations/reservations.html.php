<!DOCTYPE html>

<!--
Assignment Name: Forms
File Name: reservationss\reservationss.html.php
Date: 02/28/2021
Programmer: Matthew Flajole
-->

<html lang="en">
    <head>
        <title>Ace in the Hole Multisport Events</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../styles/reset.css" rel="stylesheet" type="text/css">
        <link href="../styles/helper.css" rel="stylesheet" type="text/css">
        <link href="../styles/grid.css" rel="stylesheet" type="text/css">
        <link href="../styles/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">

            <?php include '../includes/header.inc.html.php'; ?>

            <?php include '../includes/navigation.inc.html.php'; ?>

            <main>
                <h2>Register for events</h2>
                <aside class="sidebar">
                    <div class="fee">
                        <h3>Registration Fees</h3>
                        <ul>
                            <li>Long Course: $240</li>
                            <li>Olympic: $110</li>
                            <li>10K: $50</li>
                            <li>Half Marathon: $75</li>
                            <li>Sprint: $90</li>
                            <li>Try-Tri: $75</li>
                        </ul>
                        <h3>cost includes</h3>
                        <ul>
                            <li>Food & Beer</li>
                            <li>Access to the weekend's live entertainment & Fitness Expo</li>
                            <li>Commemorative Finisher Medal</li>
                            <li>Accurate Chip  Timing for competitive races</li>
                            <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                            <li>Post-event Party & entertainment</li>6
                        </ul>
                    </div>
                </aside>
                <section class="top">
                    <div id="reservationss">
                        <form method="post" action=" ">
                            <div class="hint">Required fields are marked with an asterisk (*).</div>
                            <input name="honeypot" type="text" value="" id="honeypot" class="honeypot" />
                            <label for="myname">* Name:</label>
                            <input type="text" name="myname" id="myname" required>
                            <label for="myage">* Age:</label>
                            <input type="number" name="myage" id="myage" min="1" max="80" required>
                            <label for="myrole">* Role:</label>
                            <select size="1" name="myrole" id="myrole">
                                <option>Choose role</option>
                                <option value="athlete">Athlete</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                            <label for="myphone">* Phone Number:</label>
                            <input type="tel" name="myphone" id="myphone">
                            <label for="myemail">* E-mail Address:</label>
                            <input type="email" name="myemail" id="myemail" required">
                            <label for="myemergname">* Emergency Contact Name:</label>
                            <input type="text" name="myemergname" id="myemergname" required>
                            <label for="myemergphone">* Emergency Contact Phone Number:</label>
                            <input type="tel" name="myemergphone" id="myemergphone" required>
                            <label for="mygender">Gender Identification:</label>
                            <select size="1" name="mygender" id="mygender">
                                <option>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <label for="myshirtsize">T-shirt Size:</label>
                            <select size="1" name="myshirtsize" id="myshirtsize">
                                <option>Select T-shirt Size</option>
                                <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                                <option value="x-large">X-Large</option>
                            </select>
                            <label for="mysatevent">* Saturday Events Registering For:</label>
                            <select size="1" name="mysatevent" id="mysatevent">
                                <option>Select Event</option>
                                <option value="long course triathlon">Long Course Triathlon</option>
                                <option value="olympic triathlon">Olympic Triathlon</option>
                                <option value="10k">10 K Race</option>
                                <option value="half marathon">Half Marathon</option>
                            </select>
                            <label for="mysunevent">* Sunday Events Registering For:</label>
                            <select size="1" name="mysunevent" id="mysunevent">
                                <option>Select Event</option>
                                <option value="sprint triathlon">Sprint Triathlon</option>
                                <option value="try-a-tri">Try-a-Tri</option>
                                <option value="splash n dash">Splash n Dash</option>
                            </select>
                            <label for="myaccommodations">Any Special Accommodations Needed?</label>
                            <textarea name="myaccommodations" id="myaccommodations" rows="2" cols="20"></textarea>
                            <input id="mysubmit" type="submit" value="Submit">
                        </form>
                    </div>
                </section>
            </main>
        </div>
    </body>

    <?php include '../includes/footer.inc.html.php'; ?>

</html>