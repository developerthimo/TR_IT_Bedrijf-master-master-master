<?php
  // **************Gegevens database localhost******************************
  // We hebben hieronder constanten gedefinieerd voor de
  // servernaam, user, password en databasenaam.
  define("SERVER_NAME", "localhost");
  define("USER_NAME", "bezoeker");
  define("PASSWORD", "Geheim");
  define("DATABASE_NAME", "tenr_it");
  // Met myqli_connect maken we contact met onze mysql-server.
  $conn = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATABASE_NAME);
  // ***********************************************************************
?>