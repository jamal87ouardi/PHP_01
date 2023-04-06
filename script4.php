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
echo "Le prix total est: ".$prix;




/*
    Ex5 : prix total d'une formation (Linux, Java ...) selon type de

    client VIP ou non


*/

?>

