<?php
require "./list.php";
try{
    session_start();
    
    if(isset($_SERVER["REQUEST_METHOD"])){
        
        if($_SERVER["REQUEST_METHOD"] === "POST") {

            if (isset($_SESSION["listHoroscope"])){
                if (isset($_SESSION["dates"])){
                    $listHoroscope = getlistHoroscope($_POST ["dates"]);
                    $_SESSION["listHoroscope"] = $listHoroscope;
                    echo json_encode(true);
                    exit;
                } else {
                    throw new Expection("Date not valid.", 405);
                }
            } else {
                throw new Expection("Request method not valid.", 405);
            }
        } else {
            throw new Expection("Request method not valid.", 405);
        }
    }else {
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