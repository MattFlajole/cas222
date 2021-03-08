<!DOCTYPE html>

<!--
Assignment Name: Ace in the Hole: Includes
File Name: includes\error.html.php
Date: 02/20/2021
Programmer: Matthew Flajole
-->

<html lang="en">
    <head>
        <title>Script Error</title>
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
            <p>
                <?php echo $error; ?>
            </p>
        </main>
    </body>

    <?php include '../includes/footer.inc.html.php'; ?>

</html>
