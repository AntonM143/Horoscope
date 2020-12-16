<?php

function horoscopeCheck ($month, $day){
$zodiac = "test";
    if($month == 3 && $day >=21 || $month == 4 && $day <=19){
        $zodiac = "Väduren";
    }
    else if($month == 4 && $day >=20 || $month == 5 && $day <=20){
        $zodiac = "Oxen";
    }
    else if($month == 5 && $day >=21 || $month == 6 && $day <=21){
        $zodiac = "Tvillingarna";
    }
    else if($month == 6 && $day >=22 || $month == 7 && $day <=22){
        $zodiac = "Kräftan";
    }
    else if($month == 7 && $day >=23 || $month == 8 && $day <=22){
        $zodiac = "Lejonet";
    }
    else if($month == 8 && $day >= 23 || $month == 9 && $day <=22){
        $zodiac = "Jungrun";
    }
    else if($month == 9 && $day >=23 || $month == 10 && $day <=22){
        $zodiac = "Vågen";
    }
    else if($month == 10 && $day >=23 || $month == 11 && $day <=21){
        $zodiac = "Skorpionen";
    }
    else if($month == 11 && $day >=22 || $month == 12 && $day <=21){
        $zodiac = "Skytten";
    }
    else if($month == 12 && $day >=22 || $month == 1 && $day <=19){
        $zodiac = "Stenbocken";
    }
    else if($month == 1 && $day >=20 || $month == 2 && $day <=18){
        $zodiac = "Vattumannen";
    }
    else if($month == 2 && $day >=19 || $month == 3 && $day <=20){
        $zodiac = "Fiskarna";
    }
    return $zodiac;
}
?>
