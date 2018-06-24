<?php
  // var_dump($_POST);
  include('./functies.php');
  $password = sanitize($_POST["password"]);
  $confirmPassword = sanitize($_POST["confirmPassword"]);
  $id = sanitize($_POST["id"]);
  if ( !empty($password) && !empty($confirmPassword)) {
    
    if ( !strcmp($password, $confirmPassword)) {
      // Maak een verbinding met de mysql-database
      include("./database_conn.php");
      // Verder gaan met het registratieproces
      $password = password_hash($password, PASSWORD_BCRYPT);
      $sql = "UPDATE `login` SET `password`  = '{$password}',
                                 `userrole`  = 'klant',
                                 `activated` = 'yes'
                           WHERE `id` = " . $id;
     
      mysqli_query($conn, $sql); 
      
      header("Location: ./index.php?action=choosepassword&status=passwordsuccess");
    } else {
      header("Location: ./index.php?action=choosepassword&status=notequalpassword");
    }
  } else {
    header("Location: ./index.php?action=choosepassword&status=emptypassword");
  }
?>