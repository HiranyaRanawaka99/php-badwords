<?php

$paragraph = $_GET["paragraph"];
$paragraph_len = strlen($paragraph);

$badword = $_GET["badword"];
$censored_word = str_replace($badword, "***", $paragraph);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container p-5"> 
    <div class= "paragraph">
       <h4>Il paragrafo è lungo <?php echo $paragraph_len ?> caratteri  </h4>
       <p> <?php echo $paragraph ?> </p>
    </div>
    <div class= "censored-paragraph">
       <h4>Il paragrafo è lungo <?php echo $paragraph_len ?> caratteri </h4>
       <p> <?= $censored_word ?> </p>
    </div>
</div>
    
</body>
</html>