<?php

/* Assignment Name: Ace in the Hole: Forms
File Name: contact\index.php
Date: 02/28/2021
Programmer: Matthew Flajole
*/

if (isset($_POST['name'])) {

    $name = null;
    $email = null;
    $message = null;
    $interest = null;

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    }
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }
    if (isset($_POST['interest'])) {
        $interest = $_POST['interest'];
    }
    $formcontent = "From: $name \n Message: $message \n Interest: $interest";
    $recipient = "matthew.flajole@pcc.edu";
    $mailheader = "From: $email \r\n";
    $mailSent = mail($recipient, 'Customer Contact', $formcontent, $mailheader);

    if ($mailSent === true) {
        include 'success.html.php';
    }
    else {
        include '../includes/error.html.php';
    }
}
else {
    include 'contact.html.php';
}