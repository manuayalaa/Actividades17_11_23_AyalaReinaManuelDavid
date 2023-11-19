<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyalaReinaManuelDavid
    </title>
</head>
<body>
    <h1>Usuarios</h1>
    <?php
    foreach($data['usuarios'] as $usuario){
        echo "Usuario: ".$usuario."<br>";
    }
      ?>
</body>
</html>