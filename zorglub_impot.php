<?php
$sexe = "";
$age = 0;
$message = "";

function impot($sexe, $age)
{
    $sexe = strtolower($sexe);
    if ($sexe == "homme" && $age >= 20) {
        $message = "Payez l'impôt";
    } else if (($sexe == "femme") && ($age <= 35 && $age >= 18)) {
        $message = "Payez l'impôt";
    } else {
        $message = "Vous ne payez pas d'impôt";
    }
    return $message;
}

echo impot("femme", 30);
