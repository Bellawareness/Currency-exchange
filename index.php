<?php
  
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "At the start of your transaction you had $riel riel, $kyat kyat, $krones krones, and $lek lek.";

$riel_to_usd = 0.00026;
$Kyat_to_usd = 0.000066;
$Krones_to_usd = 0.11;
$Lek_to_usd = 0.00090;


$usd_from_riel = $riel * $riel_to_usd;
 
echo "\nYour $riel riel were exchanged for $usd_from_riel usd.";



$usd_from_Kyat = $kyat * $Kyat_to_usd;
 
echo "\nYour $kyat kyat were exchanged for $usd_from_Kyat usd.";




$usd_from_Krones = $krones * $Krones_to_usd;
 
echo "\nYour $krones krones were exchanged for $usd_from_Krones usd.";

$usd_from_Lek = $lek * $Lek_to_usd;
 
echo "\nYour $lek lek were exchanged for $usd_from_Lek usd.";

$final_amount = $usd_from_riel + $usd_from_Kyat + $usd_from_Krones + $usd_from_Lek - 4;

echo "\nAfter deducting the transactions fees, you'll be recieving $final_amount usd.";


$dollars_only = $final_amount % 1000000000;
 
$change = $final_amount - $dollars_only;
 
$rounded_change = $change * 100;
 
$rounded_change %= 100;
 
$rounded_change /= 100;
 
$final_amount = $dollars_only + $rounded_change;

echo "\nA the rounded amount is $final_amount usd.";
