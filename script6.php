<?php
# entrées

$personnes = $_GET['per'];

$tc = $_GET['tc'];

$nuite = $_GET['nuite'];

$dej = $_GET['dej'];

$prix=0;


# traitement


if($dej=="O") {
    if($tc=="S") {
        $prix = $nuite*250 + $nuite*$personnes*35;
    }
    elseif($tc=="D") {
            
        $prix = $nuite*350 + $nuite*$personnes*35;

    }
    else {
        $prix = $nuite*500 + $nuite*$personnes*35;
    }


}
else {
    if($tc=="S") {
        $prix = $nuite*250;
    }
    elseif($tc=="D") {
            
        $prix = $nuite*350;

    }
    else {
        $prix = $nuite*500;
    }

}



# sortie
$sortie = "Le prix total est: ".$prix;

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3 style="color: blue;"> Calcul du prix de réservation </h3>

    <?php
        echo $sortie;
    ?>

    
</body>
</html>



