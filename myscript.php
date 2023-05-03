<?php
$paragraph = trim($_POST["paragraph"]);
$word_to_censor = trim($_POST["word_to_censor"]);
$paragraph_censored = str_replace("$word_to_censor", "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>
    <?php echo $paragraph . " (" . strlen($paragraph); ?>
    caratteri)
  </p>

  <p>
    <?php echo $paragraph_censored . " (" . strlen($paragraph_censored); ?>
    caratteri)
  </p>
</body>

</html>