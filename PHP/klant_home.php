<?php
  $userrole = array("eigenaar", "administrator", "klant");
  include("./security.php");
?>
<main class="container">
  <h1>Klant Startpagina</h1>
  <?php 
    //if (isset($_SESSION["email"]))  {
      echo "Welkom klant " . $_SESSION["email"];
    //}
  ?>
</main>