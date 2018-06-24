<?php
  // var_dump($_POST); exit();

  include("./database_conn.php");
  include("./functies.php");

  if (isset($_POST["conditions"])) {
    echo "gechecked";
    $naam = sanitize($_POST["naam"]);
    $achernaam = sanitize($_POST["achternaam"]);
    $bedrijfsnaam = sanitize($_POST["bedrijfsnaam"]);
    $email = sanitize($_POST["email"]);
    $conditions = sanitize($_POST["conditions"]);

    if (empty($_POST["email"])) {
      header("Location: ./index.php?action=registerform&status=empty_email");
    } else if (empty($_POST["naam"])){ 
      header("Location: ./index.php?action=registerform&status=empty_name");
    } else if (empty($_POST["achternaam"])){
      header("Location: ./index.php?action=registerform&status=empty_achternaam");
    } else if (empty($_POST["bedrijfsnaam"])){
      header("Location: ./index.php?action=registerform&status=empty_bedrijfsnaam");
    } else {
      // Maak een selectie query om te kijken in de database of het emailadres al bestaat
      $sql = "SELECT * FROM `login` WHERE `email` = '{$email}'";

      // Vuur de query af op de database
      $result = mysqli_query($conn, $sql);
      
      // Tel het aantal rijen dat voldoet aan de selectie query
      $number_of_rows = mysqli_num_rows($result);

      // Als mysqli_num_rows aantal gevonden rijen 1 teruggeeft dan...
      if (mysqli_num_rows($result)) {
        // Echo dat het emailadres al bestaat anders...
        header("Location: ./index.php?action=registerform&status=emailexists");
      } else {
        $sql = "INSERT INTO `login`    (`id`,
                                        `naam`,
                                        `achternaam`,
                                        `bedrijfsnaam`,
                                        `email`,
                                        `conditions`,
                                        `userrole`,
                                        `password`,
                                        `activated`) 
                                VALUES (NULL,
                                        '{$naam}',
                                        '{$achternaam}',
                                        '{$bedrijfsnaam}',
                                        '{$email}',
                                        '{$conditions}',
                                        'bezoeker',
                                        '',
                                        'no')";

        // Vuur de query af op de database
        mysqli_query($conn, $sql);

        $id = mysqli_insert_id($conn);

        // Hiermee wordt de verbinding verbroken.
        mysqli_close($conn);

        // Onderwerp email
        $subject = "Registratie T&R IT Bedrijf";

        $message = '<!DOCTYPE html>
                    <html lang="en">
                    <head>
                      <meta charset="UTF-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                      <meta http-equiv="X-UA-Compatible" content="ie=edge">
                      <title>Document</title>
                      <style>
                        body {
                          background-color : "rgb(220,220,220)";
                          font-size : "14px";
                        }
                      </style>
                    </head>
                    <body>
                      <h3>Beste bezoeker van onze site,</h3>
                      <p>Bedankt voor het registreren!</p> 
                      <p>Klik <a href="http://localhost/TR_IT_Bedrijf-master-master-master/PHP/index.php?action=choosepassword&status=choosepassword&id=' . $id . '">hier</a> om uw account te activeren</p>
                      <p>Met vriendelijk groet,</p>
                      <p>T&R IT Bedrijf</p>
                    </body>
                    </html>';

        $headers =  "Content-Type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: superadmin@T&R_ITBedrijf.nl \r\n";
        $headers .= "Cc: superadmin@T&R_ITBedrijf, rutger.2001@hotmail.com, thimo2000@hotmail.nl \r\n";
        $headers .= "Bcc: subscriber@T&R_ITBedrijf, 318526@student.mboutrecht.nl";

        mail($email, $subject, $message, $headers);

        // Je wordt nu direct teruggestuurd naar index.php
        header("Location: ./index.php?action=registerform&status=success");
      }
    }
  } else {
    header("Location: ./index.php?action=registerform&status=conditions_not_checked");
  }  
?>