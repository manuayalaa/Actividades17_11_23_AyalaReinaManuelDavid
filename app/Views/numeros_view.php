<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Titulo</h1>
    
    <?php
    echo "<h2>".$data['message']."</h2>";
    foreach($data['nums'] as $numero){
        echo $numero."<br>" ;

    } ?>
</body>
</html>