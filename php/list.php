<?php

function horoscope ($inputDate) {
    //array of zodiacs
    $listHoroscope = array (
        "Väduren" => "3:21:4:19",
        "Oxen" => "4:20:5:20",
        "Tvillingarna" => "5:21:6:21",
        "Kräftan" => "6:22:7:22",
        "Lejonet" => "7:23:8:22",
        "Jungfrun" => "8:23:9:22",
        "Vågen" => "9:23:10:22",
        "Skorpionen" => "10:23:11:21",
        "Skytten" => "11:22:12:21",
        "Stenbocken" => "12:22:1:19",
        "Vattumannen" => "1:20:2:18",
        "Fiskarna" => "2:19:3:20"
    );
    
    $inputDateArray = explode("-", $inputDate);
    $month = (int) $inputDateArray[1];
    $day = (int) $inputDateArray[2];

    foreach ($listHoroscope as $key => $value){
        $dates = explode (":", $value);
        $fromMonth = (int) $dates[0];
        $fromDay = (int) $dates[1];
        $toMonth = (int) $dates[2];
        $toDay = (int) $dates[3];
        if($month == $fromMonth) {
            if($day >= $fromDay) {
                return $key;
            }
        }

        if($month == $toMonth) {
            if($day <= $toDay) {
                return $key;
            }
        }
        
    }
}

?>






<!-- Väduren: 21 mars – 19 april
Oxen: 20 april – 20 maj
Tvillingarna: 21 maj – 21 juni
Kräftan: 22 juni – 22 juli
Lejonet: 23 juli – 22 augusti
Jungfrun: 23 augusti – 22 september
Vågen: 23 september – 22 oktober
Skorpionen: 23 oktober – 21 november
Skytten: 22 november – 21 december
Stenbocken: 22 december – 19 januari
Vattumannen: 20 januari – 18 februari
Fiskarna: 19 februari – 20 mars

01 januari
02 februari
03 mars
04 april
05 maj
06 juni
07 juli
08 augusti
09 september
10 oktober
11 november
12 december -->