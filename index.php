<?php


    require_once ('libraries/autoload.php');
    
    function testerCanard(App\Canards\Canard $canard) {
        $canard->cancaner();
        echo "<br>";
        $canard->voler();
    }

    $canard  = new App\Canards\Colvert();
    $dindon  = new App\Dindons\DindonSauvage();
    $adapteurDindon = new App\Canards\AdapteurDindon($dindon);

    echo "Dindon dit ...<br>";
    $dindon->glouglouter();
    echo "<br>";
    $dindon->voler();

    echo "<br><br>";
    echo "Canard dit ...<br>";
    testerCanard($canard);

    echo "<br><br>";
    echo "Adapteur Dindon dit ...<br>";
    testerCanard($adapteurDindon);

?>