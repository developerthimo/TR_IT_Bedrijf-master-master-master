<?php
  $userrole = array("eigenaar", "administrator");
  include("./security.php");
?>
<main class="container">
  <h1>Administrator Startpagina</h1>
  <?php 
    //if (isset($_SESSION["email"]))  {
      echo "Welkom administrator " . $_SESSION["email"];
    //}
  ?>
</main>