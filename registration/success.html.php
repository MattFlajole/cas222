<!DOCTYPE html>

<!--
Assignment Name: Ace in the Hole
File Name: success.htmlphp
Date: 02/12/2021
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

        <?php include '../includes/header.inc.html.php'; ?>

        <?php include '../includes/navigation.inc.html.php'; ?>

        <main>
            <h2>You have successfully registered for event!</h2>
            <p>Our records show that you have submitted the following information:<br>
                Name: <?php echo $name ?><br>
                Age: <?php echo $age ?><br>
                Role: <?php echo $role ?><br>
                Phone: <?php echo $phone ?><br>
                Email: <?php echo $email ?><br>
                Emergency Contact Name: <?php echo $emergname ?><br>
                Emergency Contact Phone: <?php echo $emergphone ?><br>
                Gender: <?php echo $gender ?><br>
                T-shirt Size: <?php echo $shirtsize ?><br>
                Saturday Events: <?php echo $satevent ?><br>
                Sunday Events: <?php echo $sunevent ?><br>
                Special Accommodations: <?php echo $accommodations ?><br>
                You will receive conformation email at <?php echo $email ?>.
            </p>
        </main>
    </body>

    <?php include '../includes/footer.inc.html.php'; ?>

</html>