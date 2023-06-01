
// opdracht-1
<?php
function somEvenGetallen($lijst) {
    return array_sum(array_filter($lijst, function($getal) {
        return $getal % 2 == 0;
    }));
}

$lijst = [1, 2, 3, 4,5,6,7,8];
$resultaat = somEvenGetallen($lijst);
echo "De som van de even getallen is: " . $resultaat; 
echo "<br>";
?>
<?php
 // opdracht-2
 function vindLangsteWoord($woordenlijst) {
    return max($woordenlijst, function($a, $b) {
        return strlen($a) - strlen($b);
    });
}

// Voorbeeldgebruik:
$woorden = ['kat', 'hond', 'olifant'];
$langsteWoord = vindLangsteWoord($woorden);
echo $langsteWoord;
echo "<br>";
?>