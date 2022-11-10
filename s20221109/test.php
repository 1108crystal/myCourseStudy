<?php
function printnamenumstarNum($value,$vali,$valj){
    for($i=1;$i<=$vali;$i++){
        for($j=1;$j<=$valj;$j++){
        echo $value."<br>";
        }
    }

    
}

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
    <?php 

        printnamenumstarNum('魔獸好棒棒',10,5);
    ?>
</body>
</html>