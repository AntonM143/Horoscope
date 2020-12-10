<?php
require "./list.php";
try{
    session_start();
    
    if(isset($_SERVER["REQUEST_METHOD"])){
        
        if($_SERVER["REQUEST_METHOD"] === "POST") {

            if (isset($_SESSION["listHoroscope"])){

                if (isset($_SESSION["date"])){
                    $listHoroscope = getlistHoroscope($_POST ["date"]);
                    $_SESSION["listHoroscope"] = serialize($listHoroscope);
                    echo json_encode(true);
                    exit;
                } else {
                    throw new Expection("Date not valid.", 500);
                }
            } else {
                echo json_encode(false);
            }
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