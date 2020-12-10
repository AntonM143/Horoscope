<?php

try{
session_start();
    if(isset($_SERVER["REQUEST_METHOD"])){

        if($_SERVER["REQUEST_METHOD"] === "DELETE"){

            if(isset($_SESSION["listHoroscope"])){

                unset($_SESSION["listHoroscope"]);
                echo json_encode(true);

            } else {
                echo json_encode(false);
            }
        }else {
            throw new Expection("Error.", 400);
        }
    } else {
        throw new Expection("Request method not valid.", 405);
    }
} catch (Expection $error){
    echo json_encode(
        array(
            "Message" => $error -> getMessage(),
            "Status" => $error -> getCode()
        )
        exit;
    );
}
?>