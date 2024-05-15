<?php
$nb_copie = 0;

function facturation($nb_copie)
{
    if ($nb_copie !== 0 && $nb_copie > 0) {
        if ($nb_copie <= 10) {
            $facture = $nb_copie * 0.10;
        } else if ($nb_copie > 10 && $nb_copie <= 30) {
            $facture = 10 * 0.10 + ($nb_copie - 10) * 0.09;
        } else {
            $facture = 10 * 0.10 + 20 * 0.09 + ($nb_copie - 30) * 0.08;
        }
    } else {
        return $facture = "Rien à facturer";
    }
    return $facture;
}

echo facturation(0);


/***** Autre façon *****/
function prixCopie($nbsCopie)
{
    $out = '0';
 
    for ($i = 0; $i < $nbsCopie; $i++) {
        switch (true) {
            case ($i < 10):
                $out += 0.10;
                break;
            case ($i >= 10 && $i < 30):
                $out += 0.09;
                break;
            default:
                $out += 0.08;
        }
    }
    return $out;
}
 
echo "0 copies : " . prixCopie(0);
echo "<br>";
echo "1 copies : " . prixCopie(1);
echo "<br>";
echo "10 copies : " . prixCopie(10);
echo "<br>";
echo "11 copies : " . prixCopie(11);
echo "<br>";
echo "15 copies : " . prixCopie(15);
echo "<br>";
echo "20 copies : " . prixCopie(20);
echo "<br>";
echo "25 copies : " . prixCopie(25);
echo "<br>";
echo "30 copies : " . prixCopie(30);
echo "<br>";
echo "35 copies : " . prixCopie(35);
echo "<br>";