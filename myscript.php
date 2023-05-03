<?php
$paragraph = trim($_POST["paragraph"]);
$word_to_censor = trim($_POST["word_to_censor"]);
$paragraph_censored = str_replace("$word_to_censor", "***", $paragraph);
echo $paragraph . strlen($paragraph);
echo $paragraph_censored . strlen($paragraph_censored);
