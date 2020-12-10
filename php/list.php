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
    $inputMonth = (int) $inputDateArray[1];
    $inputDay = (int) $inputDateArray[2];

    foreach ($listHoroscope as $key => $value){
        $dates = explode (":", $value);
        $fromMonth = (int) $dates[0];
        $fromDay = (int) $dates[1];
        $toMonth = (int) $dates[2];
        $toDay = (int) $dates[3];

        if($inputMonth == $fromMonth) {
            if($inputDay >= $fromDay) {
                return $key;
            }
        }

        if($inputMonth == $toMonth) {
            if($inputDay <= $toDay) {
                return $key;
            }
        }
        
    }
}

?>