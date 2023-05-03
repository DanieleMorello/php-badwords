<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="card shadow col-4">
      <div class="card-body">
        <form action="myscript.php" method="POST">
          <div class="mb-3">
            <label for="paragraph">Paragrafo:</label>
            <textarea name="paragraph" id="paragraph" class="form-control" placeholder="Inserisci paragrafo"></textarea>
          </div>

          <div class="mb-3">
            <label for="word_to_censor">Parola da censurare:</label>
            <input type="text" name="word_to_censor" id="word_to_censor" class="form-control"
              placeholder="Inserisci parola da censurare">
          </div>
          <button type="submit" class="btn btn-primary">Invia</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>