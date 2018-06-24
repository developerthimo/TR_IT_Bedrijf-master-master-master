<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T & R</title>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function(){
      $('#exampleModalCenter').modal('show')
    });
    </script>
</head>
<body>

<main class="container">  
  <div id="login_card" class="card text-center">
    <div class="card-header">
      <h4>Registreren</h4>
    </div>
    <class="card text-center">
        <div class="card-content">
          </div>
          <form action="./register.php" method="POST">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Voornaam" name="naam" >
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Achternaam" name="achternaam" >
                </div>
              </div>
              &ensp;
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mailadres" name="email" >
              </div>

              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Bedrijfsnaam" name="bedrijfsnaam">
                </div>
              </div>

              <div>
              <small class="form-text text-muted">Uw gegevens worden niet verder gedeeld.</small>
              </div>
              <div class="form-check" id="lbl_checkbox">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="conditions">
                <label class="form-check-label" for="exampleCheck1">U gaat akkoord met de algemene voorwaarden</label>
              </div>
            </div>
            <div class="card-footer"> 
              <button type="submit" class="btn btn-default">Verstuur</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  
    
</body>
</html>