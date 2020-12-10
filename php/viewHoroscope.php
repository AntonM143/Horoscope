<?php


try{
session_start();

    if(isset($_SERVER["REQUEST_MEHTOD"])){

        if($_SERVER["REQUEST_METHOD"] === "GET"){

            if(isset($_SESSION["listHoroscope"])){

                echo json_encode(unserialize($_SESSION["listHoroscope"]));

            }else throw new Expection("Errorr.", 500);

        } else {
            throw new Expection("Request method not valid.", 405);
        }
    }else {
        throw new Expection("Request method not valid.", 400);
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