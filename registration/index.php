<?php

/* Assignment Name: Forms
File Name: reservations\index.php
Date: 02/28/2021
Programmer: Matthew Flajole
*/

include '../includes/db.inc.html.php';

if (isset($_POST['myname']) && !($_POST['honeypot']))
{

    $name = $_POST['myname'];
    $age = $_POST['myage'];
    $role = $_POST['myrole'];
    $phone = $_POST['myphone'];
    $email = $_POST['myemail'];
    $emergname = $_POST['myemergname'];
    $emergphone = $_POST['myemergphone'];
    $gender = $_POST['mygender'];
    $shirtsize = $_POST['myshirtsize'];
    $satevent = $_POST['mysatevent'];
    $sunevent = $_POST['mysunevent'];
    $accommodations = $_POST['myaccommodations'];

    try {
        $sql = 'INSERT INTO reservations SET
          name = :name,
          age = :age,
          role = :role,
          phone = :phone,
          email = :email,
          emergency_contact_name = :emergname,
          emergency_contact_phone = :emergphone,
          gender = :gender,
          shirt_size = :shirtsize,
          saturday_event = :satevent,
          sunday_event = :sunevent,
          special_accommodations = :accommodations';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $_POST['myname']);
        $s->bindValue(':age', $_POST['myage']);
        $s->bindValue(':role', $_POST['myrole']);
        $s->bindValue(':phone', $_POST['myphone']);
        $s->bindValue(':email', $_POST['myemail']);
        $s->bindValue(':emergname', $_POST['myemergname']);
        $s->bindValue(':emergphone', $_POST['myemergphone']);
        $s->bindValue(':gender', $_POST['mygender']);
        $s->bindValue(':shirtsize', $_POST['myshirtsize']);
        $s->bindValue(':satevent', $_POST['mysatevent']);
        $s->bindValue(':sunevent', $_POST['mysunevent']);
        $s->bindValue(':accommodations', $_POST['myaccommodations']);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted form: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    include 'success.html.php';

}
else {

    include 'registration.html.php';
}



