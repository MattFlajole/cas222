<!DOCTYPE html>

<!--
Assignment Name: Ace in the Hole: Forms
File Name: contact\contact.html.php
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
                <div class="container form-top">
                    <h2>Contact Us</h2>
                    <form method="post" action=" ">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                            <label for="email">E-mail Address</label>
                            <input type="text" id="email" name="email" required>
                            <label for="message">Comment</label>
                            <textarea id="message" name="message" rows="6" cols="25" required></textarea>
                            <label for="interest">Your interest in Ace in the Hole:</label>
                            <select size="1" name="interest" id="interest" required>
                                <option></option>
                                <option value="athlete">Athlete</option>
                                <option value="volunteer">Volunteer</option>
                                <option value="interest">Interested Party</option>
                            </select>
                            <input type="submit" value="send">
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </body>

    <?php include '../includes/footer.inc.html.php'; ?>

</html>

