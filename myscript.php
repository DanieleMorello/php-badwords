<?php
$paragraph = trim($_POST["paragraph"]);
$word_to_censor = trim($_POST["word_to_censor"]);
echo str_replace("$word_to_censor", "***", $paragraph);
