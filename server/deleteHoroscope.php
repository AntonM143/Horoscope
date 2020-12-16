<?php
try{
session_start();


    if(isset($_SERVER["REQUEST_METHOD"])){

        if($_SERVER["REQUEST_METHOD"] === "DELETE"){

            if(isset($_SESSION["zodiac"])){

                unset($_SESSION["zodiac"]);
                echo json_encode(true);
                exit;

            } else {
                echo json_encode(false);
                exit;
            }
        }else {
            throw new Exception("Error.", 400);
        }
    } else {
        throw new Exception("Request method not valid.", 405);
    }
} catch (Exception $error){
    echo json_encode(
        array(
            "Message" => $error -> getMessage(),
            "Status" => $error -> getCode()
        )
    );
    exit;
}
?>