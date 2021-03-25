<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace in the Hole: contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/reset.css" rel="stylesheet" type="text/css">
    <link href="../styles/helper.css" rel="stylesheet" type="text/css">
    <link href="../styles/grid.css" rel="stylesheet" type="text/css">
    <link href="../styles/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300;700&display=swap" rel="stylesheet">
    <![endif]-->
</head>
<body>
<div id="wrapper">

    <?php include '../includes/header.inc.html.php'; ?>

    <?php include '../includes/navigation.inc.html.php'; ?>

    <main>
        <h1>Thank you very much for contacting us!</h1>
        <p>We have received the following message From <?php echo $email ?> <br> <?php echo $message ?><br> A cheerful member of our staff will be in contact with you soon. Thank You!<br>If the email address you entered is not correct, please try again.</p>
    </main>

    <?php include '../includes/footer.inc.html.php'; ?>

</div>
</body>
</html>
