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
    <h1>NUMERO</h1>
    <p><?php
    for($i=0;$i<count($data['numerosprimos']);$i++){
        if (isset($data['factores'][$i])){
            echo $data['numerosprimos'][$i].'|'.$data['factores'][$i]."<br>" ;
        }else{
            echo $data['numerosprimos'][$i].'|'."<br>" ;
        }
        
    } ?></p>


</body>
</html>